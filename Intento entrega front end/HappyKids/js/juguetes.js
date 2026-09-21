const parametros = new URLSearchParams(window.location.search);

const categoriaSeleccionada = parametros.get("categoria");

const contenedor = document.getElementById("lista-juguetes");

const tituloFiltro = document.getElementById("titulo-filtro");


let juguetesMostrar = juguetes;


if (categoriaSeleccionada) {

    juguetesMostrar = juguetes.filter(
        juguete => juguete.categoria === categoriaSeleccionada
    );

}


//Filtrar por categoría y mostrar título del filtro

if (categoriaSeleccionada && juguetesMostrar.length > 0) {

    const nombreCategoria =
        juguetesMostrar[0].categoriaNombre;

    tituloFiltro.innerHTML = `
        <h2>
            ${nombreCategoria}
        </h2>

        <p>
            Juguetes de la categoría ${nombreCategoria.toLowerCase()}.
        </p>
    `;

} else {

    tituloFiltro.innerHTML = `
        <h2>
            Todos nuestros juguetes
        </h2>

        <p>
            Explora nuestra colección completa.
        </p>
    `;

}


//Mostrar juguetes

if (juguetesMostrar.length === 0) {

    contenedor.innerHTML = `
        <div class="col-12 text-center">

            <div class="alert alert-warning">
                No encontramos juguetes en esta categoría.
            </div>

        </div>
    `;

} else {

    juguetesMostrar.forEach(juguete => {

        contenedor.innerHTML += `

            <div class="col-md-6 col-lg-4">

                <article class="card producto-card h-100">

                    <img
                        src="${juguete.imagen}"
                        class="card-img-top"
                        alt="${juguete.nombre}">

                    <div class="card-body text-center">

                        <span class="producto-categoria">
                            ${juguete.categoriaNombre}
                        </span>

                        <h3 class="card-title">
                            ${juguete.nombre}
                        </h3>

                        <p class="producto-edad">
                            Edad recomendada: ${juguete.edad}
                        </p>

                        <p class="precio">
                            $${juguete.precio.toLocaleString("es-CL")}
                        </p>

                        <a
                            href="juguete.php?id=${juguete.id}"
                            class="btn btn-outline-primary">

                            Ver juguete

                        </a>

                    </div>

                </article>

            </div>

        `;

    });

}