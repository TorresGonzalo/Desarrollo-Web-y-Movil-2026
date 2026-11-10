import os
import httpx
from fastapi import FastAPI, Depends, HTTPException, Request, Response
from fastapi.security import HTTPBearer, HTTPAuthorizationCredentials

app = FastAPI(title="Happy Kids - API Gateway (Zero Trust)")

security = HTTPBearer(auto_error=False)

AUTH_SERVICE_URL = "http://127.0.0.1:8100"
INVENTORY_URL = "http://127.0.0.1:8001"
ORDERS_URL = "http://127.0.0.1:8002"
PAYMENTS_URL = "http://127.0.0.1:8003"
GRAPHQL_URL = "http://127.0.0.1:8004"

VAULT_ADDR = os.getenv("VAULT_ADDR", "http://127.0.0.1:8200")
VAULT_TOKEN = os.getenv("VAULT_TOKEN") 

async def get_gateway_secrets():
    if not VAULT_TOKEN:
        raise RuntimeError("VAULT_TOKEN no está configurado. Revisa tu terminal.")
        
    url = f"{VAULT_ADDR}/v1/secret/data/gateway"
    headers = {"X-Vault-Token": VAULT_TOKEN}
    
    async with httpx.AsyncClient(timeout=5.0) as client:
        response = await client.get(url, headers=headers)
        if response.status_code != 200:
            raise HTTPException(status_code=500, detail="No fue posible acceder a HashiCorp Vault")
            
        vault_response = response.json()
        return vault_response["data"]["data"]

async def authenticate_client(credentials: HTTPAuthorizationCredentials = Depends(security)):
    if credentials is None:
        raise HTTPException(status_code=401, detail="Bearer token requerido")
        
    gateway_secrets = await get_gateway_secrets()
    introspection_secret = gateway_secrets["auth_introspection_secret"]
    
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            response = await client.post(
                f"{AUTH_SERVICE_URL}/introspect",
                json={"token": credentials.credentials},
                headers={"X-Gateway-Auth-Secret": introspection_secret}
            )
    except httpx.RequestError:
        raise HTTPException(status_code=503, detail="Auth Service no disponible")
        
    if response.status_code != 200:
        raise HTTPException(status_code=502, detail="Error consultando Auth Service")
        
    identity = response.json()
    if not identity.get("active", False):
        raise HTTPException(status_code=401, detail="Token inválido o expirado")
        
    return {
        "user_id": identity["user_id"],
        "username": identity["username"],
        "roles": identity["roles"],
        "backend_secret": gateway_secrets["backend_shared_secret"]
    }

# --- RUTAS PROXY ---

@app.api_route("/api/v1/inventory/{path:path}", methods=["GET"])
async def proxy_inventory(path: str, request: Request):
    gateway_secrets = await get_gateway_secrets()
    # CORRECCIÓN: Si no hay path, no pone el slash final
    target_url = f"{INVENTORY_URL}/api/v1/inventory/{path}" if path else f"{INVENTORY_URL}/api/v1/inventory"
    
    gateway_headers = {"X-Gateway-Secret": gateway_secrets["backend_shared_secret"]}
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(method=request.method, url=target_url, params=request.query_params, headers=gateway_headers)
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="Inventory Service (8001) no disponible")
    response_headers = {k: v for k, v in upstream.headers.items() if k.lower() != 'content-length'}
    return Response(content=upstream.content, status_code=upstream.status_code, headers=response_headers)

@app.api_route("/api/v1/orders/{path:path}", methods=["GET", "POST", "PUT", "DELETE"])
async def proxy_orders(path: str, request: Request, auth=Depends(authenticate_client)):
    
    target_url = f"{ORDERS_URL}/api/v1/orders/{path}" if path else f"{ORDERS_URL}/api/v1/orders"
    body = await request.body()
    gateway_headers = {
        "X-Gateway-Secret": auth["backend_secret"],
        "X-Authenticated-User": auth["username"],
        "X-Authenticated-Roles": ",".join(auth["roles"])
    }
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["Content-Type"] = content_type
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(method=request.method, url=target_url, params=request.query_params, content=body, headers=gateway_headers)
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="Orders Service (8002) no disponible")
    response_headers = {k: v for k, v in upstream.headers.items() if k.lower() != 'content-length'}
    return Response(content=upstream.content, status_code=upstream.status_code, headers=response_headers)

@app.api_route("/api/v1/payments/{path:path}", methods=["GET", "POST"])
async def proxy_payments(path: str, request: Request, auth=Depends(authenticate_client)):
    # CORRECCIÓN
    target_url = f"{PAYMENTS_URL}/api/v1/payments/{path}" if path else f"{PAYMENTS_URL}/api/v1/payments"
    body = await request.body()
    gateway_headers = {
        "X-Gateway-Secret": auth["backend_secret"],
        "X-Authenticated-User": auth["username"],
        "X-Authenticated-Roles": ",".join(auth["roles"])
    }
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["Content-Type"] = content_type
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(method=request.method, url=target_url, params=request.query_params, content=body, headers=gateway_headers)
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="Payments Service (8003) no disponible")
    response_headers = {k: v for k, v in upstream.headers.items() if k.lower() != 'content-length'}
    return Response(content=upstream.content, status_code=upstream.status_code, headers=response_headers)

@app.api_route("/api/v1/auth/{path:path}", methods=["POST"])
async def proxy_auth(path: str, request: Request):
    gateway_secrets = await get_gateway_secrets()
    # CORRECCIÓN
    target_url = f"{AUTH_SERVICE_URL}/{path}" if path else f"{AUTH_SERVICE_URL}"
    body = await request.body()
    gateway_headers = {"X-Gateway-Auth-Secret": gateway_secrets["auth_introspection_secret"]}
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["Content-Type"] = content_type
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(method=request.method, url=target_url, content=body, headers=gateway_headers)
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="Auth Service (8100) no disponible")
    response_headers = {k: v for k, v in upstream.headers.items() if k.lower() != 'content-length'}
    return Response(content=upstream.content, status_code=upstream.status_code, headers=response_headers)

@app.api_route("/graphql", methods=["GET", "POST"])
async def proxy_graphql(request: Request, auth=Depends(authenticate_client)):
    target_url = f"{GRAPHQL_URL}/graphql"
    body = await request.body()
    gateway_headers = {
        "X-Gateway-Secret": auth["backend_secret"],
        "X-Authenticated-User": auth["username"],
        "X-Authenticated-Roles": ",".join(auth["roles"])
    }
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["Content-Type"] = content_type
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(method=request.method, url=target_url, content=body, headers=gateway_headers)
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="GraphQL Gateway (8004) no disponible")
    response_headers = {k: v for k, v in upstream.headers.items() if k.lower() != 'content-length'}
    return Response(content=upstream.content, status_code=upstream.status_code, headers=response_headers)