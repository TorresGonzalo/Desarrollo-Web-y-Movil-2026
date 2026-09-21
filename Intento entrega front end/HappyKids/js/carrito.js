const listaCarrito =
    document.getElementById("lista-carrito");

const carritoVacio =
    document.getElementById("carrito-vacio");

const carritoConProductos =
    document.getElementById("carrito-con-productos");

const subtotalCarrito =
    document.getElementById("subtotal-carrito");


let carrito =
    JSON.parse(
        localStorage.getItem("happyKidsCarrito")
    ) || [];



function guardarCarrito() {

    localStorage.setItem(
        "happyKidsCarrito",
        JSON.stringify(carrito)
    );

}

function mostrarCarrito() {

    listaCarrito.innerHTML = "";

    let subtotal = 0;


    if (carrito.length === 0) {

        carritoVacio.classList.remove("d-none");

        carritoConProductos.classList.add("d-none");

        return;

    }


    carritoVacio.classList.add("d-none");

    carritoConProductos.classList.remove("d-none");



    carrito.forEach(item => {

        const producto =
            juguetes.find(
                juguete => juguete.id === item.id
            );


        if (!producto) {
            return;
        }


        const subtotalProducto =
            producto.precio * item.cantidad;


        subtotal += subtotalProducto;


        listaCarrito.innerHTML += `

            <div class="col-12">

                <div class="card carrito-item">

                    <div class="card-body">

                        <div class="row align-items-center g-3">

                            <div class="col-md-2">

                                <img
                                    src="${producto.imagen}"
                                    alt="${producto.nombre}"
                                    class="carrito-imagen">

                            </div>


                            <div class="col-md-4">

                                <h3 class="h5">
                                    ${producto.nombre}
                                </h3>

                                <p class="mb-0 producto-edad">
                                    ${producto.categoriaNombre}
                                </p>

                            </div>


                            <div class="col-md-3">

                                <div class="cantidad-control">

                                    <button
                                        class="btn btn-outline-secondary"
                                        onclick="cambiarCantidad(${producto.id}, -1)">

                                        -

                                    </button>

                                    <span>
                                        ${item.cantidad}
                                    </span>

                                    <button
                                        class="btn btn-outline-secondary"
                                        onclick="cambiarCantidad(${producto.id}, 1)">

                                        +

                                    </button>

                                </div>

                            </div>


                            <div class="col-md-2 text-md-end">

                                <strong class="precio-carrito">

                                    $${subtotalProducto.toLocaleString("es-CL")}

                                </strong>

                            </div>


                            <div class="col-md-1 text-md-end">

                                <button
                                    class="btn btn-sm btn-outline-danger"
                                    onclick="eliminarProducto(${producto.id})">

                                    🗑

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        `;

    });


    subtotalCarrito.textContent =
        `$${subtotal.toLocaleString("es-CL")}`;

}



//Aca el cambiar cantidad de productos en el carrito

function cambiarCantidad(id, cambio) {

    const item =
        carrito.find(
            producto => producto.id === id
        );


    if (!item) {
        return;
    }


    item.cantidad += cambio;


    if (item.cantidad <= 0) {

        carrito =
            carrito.filter(
                producto => producto.id !== id
            );

    }


    guardarCarrito();

    mostrarCarrito();

}

//Quitar un producto del carrito
function eliminarProducto(id) {

    carrito =
        carrito.filter(
            producto => producto.id !== id
        );


    guardarCarrito();

    mostrarCarrito();

}



//Vaciar carrito
document
    .getElementById("vaciar-carrito")
    .addEventListener("click", () => {

        carrito = [];

        guardarCarrito();

        mostrarCarrito();

    });



//Continuar con la compra

document
    .getElementById("continuar-compra")
    .addEventListener("click", () => {

        alert(
            "La compra no está disponible, no es una página real."
        );

    });



mostrarCarrito();