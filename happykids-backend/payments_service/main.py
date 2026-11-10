import os
import secrets
from typing import Optional
from fastapi import FastAPI, HTTPException, Header, Depends
from pydantic import BaseModel
from motor.motor_asyncio import AsyncIOMotorClient
from bson import ObjectId
from contextlib import asynccontextmanager
from datetime import datetime, timezone

# Configuración de BD MongoDB (Requisito de persistencia real)
MONGODB_URI = "mongodb://localhost:27017"
DB_NAME = "happykids_db"
COLL_NAME = "pagos"

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

app = FastAPI(title="HappyKids - Payments Service", version="1.0.0", lifespan=lifespan)

# --- SEGURIDAD ZERO TRUST (Candado del Gateway) ---
INTERNAL_GATEWAY_SECRET = os.getenv("INTERNAL_GATEWAY_SECRET", "super_secreto_backend_123")

def verificar_gateway(x_gateway_secret: str = Header(default="")):
    if not secrets.compare_digest(x_gateway_secret, INTERNAL_GATEWAY_SECRET):
        raise HTTPException(status_code=403, detail="Solicitud no autorizada desde Gateway")

# --- MODELOS PYDANTIC ---
class PagoIn(BaseModel):
    orderId: str
    monto: float
    metodoPago: str # ej: "TARJETA_CREDITO", "WEBPAY"

class PagoOut(BaseModel):
    paymentId: str
    orderId: str
    monto: float
    status: str
    proveedor_tx_id: Optional[str] = None
    createdAt: str

# --- ENDPOINTS (Requisitos del Módulo 3) ---

@app.get("/health", dependencies=[Depends(verificar_gateway)], tags=["Sistema"])
def health_check():
    return {"status": "ok", "service": "payments"}

# 1. Inicio de pagos
@app.post("/api/v1/payments", response_model=PagoOut, status_code=201, dependencies=[Depends(verificar_gateway)], tags=["Pagos"])
async def iniciar_pago(pago: PagoIn, x_authenticated_user: Optional[str] = Header(default="anonimo")):
    
    # Simulamos la comunicación con un proveedor externo (ej. Transbank/Webpay)
    # En un entorno real aquí se haría un request al proveedor.
    tx_id_simulado = f"tx-ext-{secrets.token_hex(4)}"
    
    nuevo_pago = {
        "paymentId": f"pay-{ObjectId()}",
        "orderId": pago.orderId,
        "userId": x_authenticated_user,
        "monto": pago.monto,
        "metodoPago": pago.metodoPago,
        "status": "COMPLETED", # Simulación de pago exitoso inmediato
        "proveedor_tx_id": tx_id_simulado,
        "createdAt": datetime.now(timezone.utc).isoformat()
    }
    
    # Persistencia real en MongoDB
    await coll.insert_one(nuevo_pago)
    return PagoOut(**nuevo_pago)

# 2. Comprobación del resultado
@app.get("/api/v1/payments/{payment_id}", response_model=PagoOut, dependencies=[Depends(verificar_gateway)], tags=["Pagos"])
async def consultar_pago(payment_id: str):
    doc = await coll.find_one({"paymentId": payment_id})
    if not doc:
        raise HTTPException(status_code=404, detail="Transacción de pago no encontrada")
    
    return PagoOut(**doc)