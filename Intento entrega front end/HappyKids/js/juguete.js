const parametrosProducto =
    new URLSearchParams(window.location.search);

const idProducto =
    Number(parametrosProducto.get("id"));


const producto =
    juguetes.find(juguete => juguete.id === idProducto);


const contenedorDetalle =
    document.getElementById("detalle-juguete");

const productoNoEncontrado =
    document.getElementById("producto-no-encontrado");


//Comprobar si el producto existe

if (!producto) {

    contenedorDetalle.classList.add("d-none");

    productoNoEncontrado.classList.remove("d-none");

} else {

    document.title =
        `Happy Kids | ${producto.nombre}`;


    document.getElementById("imagen-juguete").src =
        producto.imagen;

    document.getElementById("imagen-juguete").alt =
        producto.nombre;


    document.getElementById("categoria-juguete").textContent =
        producto.categoriaNombre;


    document.getElementById("nombre-juguete").textContent =
        producto.nombre;


    document.getElementById("edad-juguete").textContent =
        `Edad recomendada: ${producto.edad}`;


    document.getElementById("precio-juguete").textContent =
        `$${producto.precio.toLocaleString("es-CL")}`;


    document.getElementById("descripcion-juguete").textContent =
        producto.descripcion;



//Cambiar cantidad de productos 

    let cantidad = 1;

    const textoCantidad =
        document.getElementById("cantidad-juguete");


    document
        .getElementById("sumar-cantidad")
        .addEventListener("click", () => {

            cantidad++;

            textoCantidad.textContent = cantidad;

        });


    document
        .getElementById("restar-cantidad")
        .addEventListener("click", () => {

            if (cantidad > 1) {

                cantidad--;

                textoCantidad.textContent = cantidad;

            }

        });



//Agregar al carrito

    document
        .getElementById("agregar-carrito")
        .addEventListener("click", () => {

            let carrito =
                JSON.parse(
                    localStorage.getItem("happyKidsCarrito")
                ) || [];


            const productoExistente =
                carrito.find(
                    item => item.id === producto.id
                );


            if (productoExistente) {

                productoExistente.cantidad += cantidad;

            } else {

                carrito.push({

                    id: producto.id,

                    cantidad: cantidad

                });

            }


            localStorage.setItem(
                "happyKidsCarrito",
                JSON.stringify(carrito)
            );


            const mensaje =
                document.getElementById("mensaje-carrito");


            mensaje.classList.remove("d-none");


            setTimeout(() => {

                mensaje.classList.add("d-none");

            }, 2500);

        });

}