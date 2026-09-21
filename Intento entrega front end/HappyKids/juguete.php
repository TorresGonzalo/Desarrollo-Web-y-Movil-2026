<!DOCTYPE html>
<html lang="es">

<head>

    <title>Happy Kids | Juguete</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

    <link href="css/paleta-de-colores.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

</head>


<body>


    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a
                class="navbar-brand"
                href="index.php">

                HAPPY KIDS

            </a>


            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div
                class="collapse navbar-collapse"
                id="menuPrincipal">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="juguetes.php">
                            Juguetes
                        </a>
                    </li>

                    <li class="nav-item dropdown">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown">

                            Categorías

                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=peluches">
                                    🧸 Peluches
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=puzzles">
                                    🧩 Puzzles
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=construccion">
                                    🧱 Construcción
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=educativos">
                                    🧠 Educativos
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=manualidades">
                                    🎨 Manualidades
                                </a>
                            </li>

                            <li>
                                <a
                                    class="dropdown-item"
                                    href="juguetes.php?categoria=juegos">
                                    🎲 Juegos de mesa
                                </a>
                            </li>

                        </ul>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">
                            Nosotros
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">
                            Contacto
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php">
                            🛒 Carrito
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <main class="container py-5">

        <div
            id="producto-no-encontrado"
            class="text-center d-none">

            <h1>
                Juguete no encontrado
            </h1>

            <p>
                El producto que buscas no existe.
            </p>

            <a
                href="juguetes.php"
                class="btn btn-primary">

                Volver a juguetes

            </a>

        </div>


        <div
            id="detalle-juguete"
            class="producto-detalle">

            <div class="row align-items-center g-5">


                <div class="col-md-6">

                    <img
                        id="imagen-juguete"
                        class="img-fluid producto-imagen-detalle"
                        alt="">

                </div>



                <div class="col-md-6">

                    <span
                        id="categoria-juguete"
                        class="producto-categoria">
                    </span>


                    <h1 id="nombre-juguete">
                    </h1>


                    <p
                        id="edad-juguete"
                        class="producto-edad">
                    </p>


                    <p
                        id="precio-juguete"
                        class="precio">
                    </p>


                    <p
                        id="descripcion-juguete"
                        class="producto-descripcion">
                    </p>



                    <div class="cantidad-control mb-4">

                        <span>
                            Cantidad:
                        </span>

                        <button
                            id="restar-cantidad"
                            type="button"
                            class="btn btn-outline-secondary">

                            -

                        </button>

                        <span id="cantidad-juguete">
                            1
                        </span>

                        <button
                            id="sumar-cantidad"
                            type="button"
                            class="btn btn-outline-secondary">

                            +

                        </button>

                    </div>


                    <button
                        id="agregar-carrito"
                        class="btn btn-primary btn-lg">

                        🛒 Agregar al carrito

                    </button>


                    <div
                        id="mensaje-carrito"
                        class="alert alert-success mt-3 d-none">

                        ¡Producto agregado al carrito!

                    </div>

                </div>

            </div>

        </div>

    </main>


    <footer class="footer-happy">

        <div class="container text-center">

            <strong class="footer-logo">
                HAPPY KIDS
            </strong>

            <p class="footer-eslogan">
                Aprende jugando
            </p>

            <div class="footer-enlaces">

                <a href="contacto.php">
                    Contáctanos
                </a>

                <span>•</span>

                <a href="#">
                    X
                </a>

                <a href="#">
                    Instagram
                </a>

                <a href="#">
                    Facebook
                </a>

            </div>

            <p class="footer-copy">
                2026 © Happy Kids. Todos los derechos reservados.
            </p>

        </div>

    </footer>


    <script src="js/datos-juguetes.js"></script>
    <script src="js/juguete.js"></script>

</body>

</html>