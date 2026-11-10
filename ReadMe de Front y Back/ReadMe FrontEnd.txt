# HappyKids Frontend - Prototipo Responsivo y DOM (Evaluación 1)
Alumno: Gonzalo Torres | Asignatura: Desarrollo Web y Móvil

Este proyecto corresponde a la Etapa 1 (Frontend) del Caso de Negocio N° 36 (Juguetería Happy Kids). Es un prototipo funcional, responsivo y dinámico, construido con HTML5, CSS3, JavaScript y Bootstrap.

## 1. Definición del Alcance (Criterio 1)
*   Actor Principal: Cliente de la juguetería (Visitante/Comprador).
*   Objetivo de Usuario: Explorar el catálogo de juguetes, revisar disponibilidad y gestionar el carrito de compras.
*   Flujo Implementado: Consultar catálogo -> Seleccionar juguete -> Modificar carrito -> Confirmar (Simulado).
*   Concerns de Front-end Abordados: Compatibilidad multiplataforma (Móvil/Tablet/Escritorio), rendimiento (manipulación del DOM sin recargas completas) y estados operacionales (carga, éxito, error).

## 2. Decisiones de Diseño y Responsividad (Criterios 3, 4 y 5)
La interfaz no depende de medidas rígidas. Se implementó una transformación basada en reglas:
*   Grid System (Bootstrap): Se definió un layout de 12 columnas. En dispositivos móviles (menor a 768px), las tarjetas de juguetes ocupan el 100% del ancho (`col-12`). En tabletas ocupan la mitad (`col-md-6`) y en escritorio se distribuyen en filas de 3 o 4 (`col-lg-4` / `col-lg-3`).
*   Box Model & Flexbox: Se utilizó `margin` y `padding` de forma deliberada para asegurar la legibilidad y áreas táctiles cómodas (touch targets). El interior de los componentes (como la alineación de precios y botones en las tarjetas) utiliza Flexbox (`d-flex`, `justify-content-between`) para mantener consistencia independientemente de la longitud del texto.

## 3. Interactividad y DOM (Criterio 7)
El catálogo de productos no está hardcodeado en el HTML. La vista se personaliza en runtime:
*   Se utilizan `addEventListener` para capturar interacciones del usuario.
*   Se emplea `document.querySelector` para inyectar contenido dinámico.
*   Las tarjetas de productos se generan dinámicamente iterando sobre la respuesta de la API simulada, modificando clases y atributos en tiempo real.

## 4. Servicios Simulados (Dummy APIs) (Criterio 8)
El proyecto consume datos mediante simulaciones asíncronas (`fetch`). 
*   Consulta: Se consume un catálogo de productos simulado para armar la vista principal.
*   Acción Simulado: Al agregar un elemento o procesar el carrito, la interfaz reacciona simulando un estado de "Carga", seguido de un estado de "Éxito".

## 5. Instrucciones de Ejecución
Para visualizar el prototipo correctamente y evitar bloqueos por políticas de CORS al realizar peticiones `fetch`:
1.  Copie esta carpeta completa dentro del directorio `htdocs` de su servidor local XAMPP (ej. `C:\xampp\htdocs\HappyKids_Front`).
2.  Inicie el servicio de **Apache** en el panel de control de XAMPP.
3.  Abra su navegador web y diríjase a: `http://localhost/HappyKids_Front` (ajuste el nombre de la carpeta según corresponda).