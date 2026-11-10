import os
import secrets
from typing import List, Optional
from fastapi import FastAPI, HTTPException, Header, Depends
from pydantic import BaseModel
from motor.motor_asyncio import AsyncIOMotorClient
from bson import ObjectId
from contextlib import asynccontextmanager
from datetime import datetime, timezone

MONGODB_URI = "mongodb://localhost:27017"
DB_NAME = "happykids_db"
COLL_NAME = "pedidos"

client: AsyncIOMotorClient | None = None
db = None
coll = None

@asynccontextmanager
async def lifespan(app: FastAPI):
    global client, db, coll
    client = AsyncIOMotorClient(MONGODB_URI)
    db = client[DB_NAME]
    coll = db[COLL_NAME]
    yield
    client.close()

app = FastAPI(title="HappyKids - Orders Service", version="1.0.0", lifespan=lifespan)

# --- SEGURIDAD: Candado del Gateway y lectura de identidad inyectada ---
INTERNAL_GATEWAY_SECRET = os.getenv("INTERNAL_GATEWAY_SECRET", "super_secreto_backend_123")

def verificar_gateway(x_gateway_secret: str = Header(default="")):
    if not secrets.compare_digest(x_gateway_secret, INTERNAL_GATEWAY_SECRET):
        raise HTTPException(status_code=403, detail="Solicitud no autorizada desde Gateway")

class ItemPedido(BaseModel):
    id_prod: str
    cantidad: int

class ShippingDetails(BaseModel):
    direccion: str
    ciudad: str

class PedidoIn(BaseModel):
    items: List[ItemPedido]
    shippingDetails: ShippingDetails

class PedidoOut(BaseModel):
    orderId: str
    userId: str
    total: float
    status: str
    createdAt: str
    items: List[ItemPedido]
    shippingDetails: ShippingDetails

@app.get("/health", dependencies=[Depends(verificar_gateway)], tags=["Sistema"])
def health_check():
    return {"status": "ok", "service": "orders"}

@app.post("/api/v1/orders", response_model=PedidoOut, status_code=201, dependencies=[Depends(verificar_gateway)], tags=["Pedidos"])
async def crear_pedido(pedido: PedidoIn, x_authenticated_user: Optional[str] = Header(default="anonimo")):
    total_calculado = sum([item.cantidad * 12500 for item in pedido.items]) 
    
    nuevo_pedido = {
        "orderId": f"ord-{ObjectId()}",
        "userId": x_authenticated_user, 
        "items": [item.model_dump() for item in pedido.items],
        "shippingDetails": pedido.shippingDetails.model_dump(),
        "total": total_calculado,
        "status": "PENDING_PAYMENT",
        "createdAt": datetime.now(timezone.utc).isoformat()
    }
    
    await coll.insert_one(nuevo_pedido)
    return PedidoOut(**nuevo_pedido)

@app.get("/api/v1/orders/{order_id}", response_model=PedidoOut, dependencies=[Depends(verificar_gateway)], tags=["Pedidos"])
async def obtener_pedido(order_id: str):
    doc = await coll.find_one({"orderId": order_id})
    if not doc:
        raise HTTPException(status_code=404, detail="Pedido no encontrado")
    return PedidoOut(**doc)


class UpdateStatusIn(BaseModel):
    status: str

@app.put("/api/v1/orders/{order_id}", response_model=PedidoOut, dependencies=[Depends(verificar_gateway)], tags=["Pedidos"])
async def actualizar_estado_pedido(order_id: str, update_data: UpdateStatusIn):
    doc = await coll.find_one({"orderId": order_id})
    if not doc:
        raise HTTPException(status_code=404, detail="Pedido no encontrado")
        
    await coll.update_one({"orderId": order_id}, {"$set": {"status": update_data.status}})
    doc_actualizado = await coll.find_one({"orderId": order_id})
    return PedidoOut(**doc_actualizado)


@app.delete("/api/v1/orders/{order_id}", dependencies=[Depends(verificar_gateway)], tags=["Pedidos"])
async def eliminar_pedido(order_id: str):
    doc = await coll.find_one({"orderId": order_id})
    if not doc:
        raise HTTPException(status_code=404, detail="Pedido no encontrado")
    

    if doc["status"] not in ["PENDING_PAYMENT", "DRAFT"]:
        raise HTTPException(status_code=400, detail="No se puede eliminar un pedido que ya está procesado. Debe solicitar anulación formal.")
        
    await coll.delete_one({"orderId": order_id})
    return {"message": f"Pedido {order_id} eliminado correctamente"}