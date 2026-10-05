import os
import secrets
import httpx

#Vault Server   Backend

from fastapi import (
    FastAPI,
    Depends,
    HTTPException,
    Request,
    Response)

from fastapi.security import (
    HTTPBearer, 
    HTTPAuthorizationCredentials)

app = FastAPI(title= "Local API Gateway")

security = HTTPBearer(
    auto_error=False
)

AUTH_SERVICE_URL = os.getenv(
    "AUTH_SERVICE_URL", 
    "http://127.0.0.1:8100"
)

VAULT_ADDR = os.getenv( #SELINUX
    "VAULT_ADDR", "http://localhost:8200")

VAULT_TOKEN = os.getenv(
    "VAULT_TOKEN" #dev-only-token
)

if not VAULT_TOKEN:
    raise RuntimeError(
        "VAULT_TOKEN no está configurado"
    )
    
async def get_gateway_secrets():
    url = (
        f"{VAULT_ADDR}" #http://localhost:8200
        "/v1/secret/data/gateway"
    )
    headers = {
        "X-Vault-Token": VAULT_TOKEN #dev-only-token
    }
    async with httpx.AsyncClient(timeout=5.0) as client:
        response = await client.get(
            url, 
            headers=headers
            )
        if response.status_code != 200:
            raise HTTPException(
                status_code=500,
                detail="No fue posible acceder a Vault: {response}"
            )
            
        vault_response = response.json()
        return vault_response["data"]["data"]
    
async def authenticate_client(
    credentials: HTTPAuthorizationCredentials = Depends(security)
):
    if credentials is None:
        raise HTTPException(
            status_code=401,
            detail="Bearer token requerido"
        )
    gateway_secrets = (
        await get_gateway_secrets() #client_token backend_shared_secret
    )
    introspection_secret = (
        gateway_secrets["auth_introspection_secret"]
    )
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            response = await client.post(
                f"{AUTH_SERVICE_URL}/introspect",
                json={"token": credentials.credentials},
                headers={
                    "X-Gateway-Auth-Secret": introspection_secret
                }
            )
    except httpx.RequestError:
        raise HTTPException(
            status_code=503,
            detail="Authentication service no disponible"
        )
    if response.status_code != 200:
        raise HTTPException(
            status_code=502,
            detail="Error consultando Authentication Service"
        )
    identity = response.json()
    if not identity.get("active", False):
        raise HTTPException(
            status_code=401,
            detail="Token inválido o expirado"
        )
    return {
        "user_id": identity["user_id"],
        "username": identity["username"],
        "roles": identity["roles"],
        "backend_secret": gateway_secrets["backend_shared_secret"]
    }

BACKEND_URL = "http://localhost:9000" #fastapi
BACKEND_URL2 = "http://localhost:9100" #fastapi2

@app.api_route(
    "/api/{path:path}", #product health orders
    methods=["GET", "POST", "PUT", "DELETE"]
)
async def proxy(
    path: str,
    request: Request,
    auth=Depends(authenticate_client)
):
    target_url = f"{BACKEND_URL}/{path}" #Call http://localhost:8000/api/products -> http://localhost:9000/products
    body = await request.body()
    gateway_headers = {
        "X-Gateway-Secret": 
            auth["backend_secret"], #gateway-api-secret-456
        "X-Authenticated-Client": 
            auth["client_id"], #student-client -> Autenticador
        "X-Authenticated-User": 
            auth["username"],
        "X-Authenticated-Roles":
            auth["roles"]
    }    
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["content_type"] = content_type
    try:
        async with httpx.AsyncClient(timeout=5.0) as client:
            upstream = await client.request(
                method=request.method,#Get, Post, Put, Delete
                url=target_url, #"http://localhost:9000/products"
                params=request.query_params, #"http://localhost:890000/products?var1=3&var2=6"
                content=body,
                headers=gateway_headers
            )
    except httpx.RequestError:
        raise HTTPException(
            status_code=502,
            detail="Backend no disponible"
        )
    response_headers = {}
    if "content-type" in upstream.headers:
        response_headers["content-type"] = upstream.headers["content-type"]
    return Response(
        content=upstream.content,
        status_code=upstream.status_code,
        headers=response_headers
    )