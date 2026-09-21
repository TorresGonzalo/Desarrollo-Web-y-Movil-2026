<!DOCTYPE html>
<html lang="es">

<head>

    <title>Happy Kids | Carrito</title>

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
                        <a
                            class="nav-link active"
                            href="carrito.php">

                            🛒 Carrito

                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <header class="pagina-encabezado text-center">

        <div class="container">

            <span class="seccion-etiqueta">
                Tu selección
            </span>

            <h1>
                Mi Carrito
            </h1>

            <p>
                Revisa los juguetes que has seleccionado.
            </p>

        </div>

    </header>



    <main class="container py-5">

        <div id="carrito-vacio" class="text-center d-none">

            <h2>
                Tu carrito está vacío
            </h2>

            <p class="mb-4">
                Todavía no has agregado ningún juguete.
            </p>

            <a
                href="juguetes.php"
                class="btn btn-primary">

                Explorar juguetes

            </a>

        </div>



        <div id="carrito-con-productos" class="d-none">

            <div
                id="lista-carrito"
                class="row g-4 mb-5">
            </div>


            <div class="carrito-resumen text-end">

                <h3>
                    Subtotal:
                    <span id="subtotal-carrito">
                        $0
                    </span>
                </h3>


                <button
                    id="continuar-compra"
                    class="btn btn-primary btn-lg mt-3">

                    Continuar compra

                </button>


                <button
                    id="vaciar-carrito"
                    class="btn btn-outline-secondary btn-lg mt-3">

                    Vaciar carrito

                </button>

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
    <script src="js/carrito.js"></script>

</body>

</html>