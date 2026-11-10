# HappyKids Backend - Arquitectura Zero Trust (Evaluación 2)
Alumno: Gonzalo Torres | Asignatura: Desarrollo Web y Móvil

Este proyecto implementa una arquitectura de microservicios en Python (FastAPI) con un modelo de seguridad Zero Trust. Se apoya en HashiCorp Vault para la gestión de secretos (no hay contraseñas duras en el código) y en MongoDB (vía motor asíncrono) para la persistencia real de datos.

## Requisitos Previos para el Evaluador
* Python 3.10 o superior.
* HashiCorp Vault instalado y en el PATH del sistema.
* MongoDB corriendo localmente (Puerto 27017).
* Un cliente HTTP (como Thunder Client o Postman) para ejecutar las pruebas.

---

## Instrucciones de Despliegue Local (Paso a Paso)

Debido al modelo de seguridad Zero Trust, los servicios deben levantarse en un orden específico, inyectando las llaves maestras generadas en tiempo real.

### Paso 1: Configurar HashiCorp Vault (Terminal 1)
Inicie el servidor de desarrollo de Vault en una terminal nueva:
```bash
vault server -dev

Al ejecutar el comando anterior, la consola mostrará un Root Token. Copie ese token, ya que lo necesitará en los siguientes pasos para autorizar al API Gateway.

Paso 2: Inyectar Secretos en Vault (Terminal 2)
Abra una nueva terminal, configure las variables de entorno y guarde las llaves maestras que usarán los microservicios:

# En Windows (PowerShell)
$env:VAULT_ADDR="[http://127.0.0.1:8200](http://127.0.0.1:8200)"
$env:VAULT_TOKEN="<PEGUE_AQUI_EL_ROOT_TOKEN_DEL_PASO_1>"

# Inyectar secretos del Gateway (Copiar y pegar línea exacta)
vault kv put secret/gateway auth_introspection_secret="demo-secret" backend_shared_secret="backend-123"

Paso 3: Instalar Dependencias (Terminal 3)
En la raíz del proyecto, active su entorno virtual e instale los requerimientos:

pip install fastapi uvicorn motor pydantic httpx strawberry-graphql

Paso 4: Levantar Microservicios Privados (Terminales 3, 4, 5 y 6)
Estos servicios están protegidos y operan en red privada. Levante cada uno en su puerto respectivo:

uvicorn auth_service.main:app --reload --port 8100
uvicorn inventory_service.main:app --reload --port 8001
uvicorn orders_service.main:app --reload --port 8002
uvicorn payments_service.main:app --reload --port 8003

Paso 5: Levantar los Gateways (Terminales 7 y 8)
El GraphQL y el API Gateway público.

# Terminal 7: GraphQL Gateway de Agregación
uvicorn graphql_gateway.main:app --reload --port 8004

# Terminal 8: API Gateway Principal (Punto de entrada público)
# Debe inyectar el token de Vault en esta consola antes de iniciar el servidor
$env:VAULT_TOKEN="<PEGUE_AQUI_EL_ROOT_TOKEN_DEL_PASO_1>"
uvicorn api_gateway.main:app --reload --port 8000

El sistema está listo. El Gateway está escuchando en http://localhost:8000. Todas las pruebas deben dirigirse a este puerto, tal como se documenta en el informe.