import os
import secrets
import httpx
import strawberry
from typing import List, Optional
from fastapi import FastAPI, HTTPException, Header, Depends, Request
from strawberry.fastapi import GraphQLRouter

# --- SEGURIDAD ZERO TRUST ---
INTERNAL_GATEWAY_SECRET = os.getenv("INTERNAL_GATEWAY_SECRET", "super_secreto_backend_123")

def verificar_gateway(x_gateway_secret: str = Header(default="")):
    if not secrets.compare_digest(x_gateway_secret, INTERNAL_GATEWAY_SECRET):
        raise HTTPException(status_code=403, detail="Solicitud no autorizada al GraphQL Gateway")

# --- DEFINICIÓN DE TIPOS (El Schema de GraphQL) ---
@strawberry.type
class ProductoDetalle:
    id_prod: str
    nombre: str
    precio: float
    imagen: str

@strawberry.type
class ItemAgregado:
    id_prod: str
    cantidad: int
    subtotal: float
    producto: Optional[ProductoDetalle]

@strawberry.type
class PedidoAgregado:
    orderId: str
    status: str
    total: float
    items: List[ItemAgregado]

# --- RESOLVERS (La lógica de agregación del Módulo 8) ---
@strawberry.type
class Query:
    @strawberry.field
    async def pedido_resumen(self, order_id: str, info: strawberry.Info) -> PedidoAgregado:
        request = info.context["request"]
        
        # Propagamos la identidad protegida
        headers = {
            "X-Gateway-Secret": INTERNAL_GATEWAY_SECRET,
            "X-Authenticated-User": request.headers.get("x-authenticated-user", "anonimo")
        }
        
        async with httpx.AsyncClient() as client:
            # 1. Llamada al microservicio de Pedidos (8002)
            resp_order = await client.get(f"http://127.0.0.1:8002/api/v1/orders/{order_id}", headers=headers)
            if resp_order.status_code != 200:
                raise Exception(f"No se pudo encontrar el pedido {order_id}")
            
            order_data = resp_order.json()
            items_agregados = []
            
            # 2. Llamada al microservicio de Inventario (8001) para traer detalles de cada ítem
            for item in order_data["items"]:
                resp_prod = await client.get(f"http://127.0.0.1:8001/api/v1/inventory/products/{item['id_prod']}", headers=headers)
                
                prod_detalle = None
                subtotal = 0.0
                
                if resp_prod.status_code == 200:
                    p_data = resp_prod.json()
                    prod_detalle = ProductoDetalle(
                        id_prod=p_data["id_prod"],
                        nombre=p_data["nombre"],
                        precio=p_data["precio"],
                        imagen=p_data.get("imagen", "")
                    )
                    subtotal = item["cantidad"] * p_data["precio"]
                    
                items_agregados.append(ItemAgregado(
                    id_prod=item["id_prod"],
                    cantidad=item["cantidad"],
                    subtotal=subtotal,
                    producto=prod_detalle
                ))
                
            return PedidoAgregado(
                orderId=order_data["orderId"],
                status=order_data["status"],
                total=order_data["total"],
                items=items_agregados
            )

schema = strawberry.Schema(query=Query)

async def get_context(request: Request):
    return {"request": request}

graphql_app = GraphQLRouter(schema, context_getter=get_context)

app = FastAPI(title="Happy Kids - GraphQL Gateway")

# Protegemos toda la ruta de GraphQL con el candado del API Gateway principal
app.include_router(graphql_app, prefix="/graphql", dependencies=[Depends(verificar_gateway)])