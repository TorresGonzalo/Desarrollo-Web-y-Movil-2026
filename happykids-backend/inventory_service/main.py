import os
import secrets
from typing import List, Optional
from fastapi import FastAPI, HTTPException, Query, Header, Depends
from pydantic import BaseModel
from motor.motor_asyncio import AsyncIOMotorClient
from contextlib import asynccontextmanager

MONGODB_URI = "mongodb://localhost:27017"
DB_NAME = "happykids_db"
COLL_NAME = "productos"

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

app = FastAPI(title="HappyKids - Inventory Service", version="1.0.0", lifespan=lifespan)

# --- SEGURIDAD: Candado de origen (Solo acepta llamadas del Gateway) ---
INTERNAL_GATEWAY_SECRET = os.getenv("INTERNAL_GATEWAY_SECRET", "super_secreto_backend_123")

def verificar_gateway(x_gateway_secret: str = Header(default="")):
    if not secrets.compare_digest(x_gateway_secret, INTERNAL_GATEWAY_SECRET):
        raise HTTPException(status_code=403, detail="Solicitud no autorizada: Debe pasar por el API Gateway")

class ProductoOut(BaseModel):
    id_prod: str
    nombre: str
    precio: float
    stock: int
    imagen: str
    detalles: Optional[str] = None
    categoria: Optional[str] = None

    class Config:
        populate_by_name = True

def doc_to_producto(doc) -> ProductoOut:
    return ProductoOut(
        id_prod=doc["id_prod"],
        nombre=doc["nombre"],
        precio=doc["precio"],
        stock=doc.get("stock", 0),
        imagen=doc.get("imagen", ""),
        detalles=doc.get("detalles", ""),
        categoria=doc.get("categoria", "")
    )

@app.get("/health", tags=["Sistema"])
def health_check():
    return {"status": "ok", "service": "inventory"}

# Ruta blindada con el candado del Gateway
@app.get("/api/v1/inventory/products", response_model=List[ProductoOut], dependencies=[Depends(verificar_gateway)], tags=["Inventario"])
async def consultar_catalogo(category: Optional[str] = Query(None)):
    query = {}
    if category:
        query["categoria"] = category
    
    cursor = coll.find(query)
    productos = []
    async for doc in cursor:
        productos.append(doc_to_producto(doc))
    return productos

@app.get("/api/v1/inventory/products/{id_prod}", response_model=ProductoOut, dependencies=[Depends(verificar_gateway)], tags=["Inventario"])
async def ver_detalle(id_prod: str):
    doc = await coll.find_one({"id_prod": id_prod})
    if not doc:
        raise HTTPException(status_code=404, detail="Producto no encontrado")
    return doc_to_producto(doc)