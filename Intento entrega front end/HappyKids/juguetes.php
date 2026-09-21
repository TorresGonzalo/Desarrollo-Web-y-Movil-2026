<!DOCTYPE html>
<html lang="es">

<head>

    <title>Happy Kids | Juguetes</title>

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

            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link active" href="juguetes.php">
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



    <header class="pagina-encabezado text-center">

        <div class="container">

            <span class="seccion-etiqueta">
                Explora nuestra colección
            </span>

            <h1>
                Nuestros Juguetes
            </h1>

            <p>
                Encuentra juguetes pensados para aprender,
                imaginar y divertirse.
            </p>

        </div>

    </header>



    <section class="container py-4">

        <div class="filtros-categorias text-center">

            <a
                href="juguetes.php"
                class="btn btn-outline-primary filtro-btn">

                Todos

            </a>

            <a
                href="juguetes.php?categoria=peluches"
                class="btn btn-outline-primary filtro-btn">

                🧸 Peluches

            </a>

            <a
                href="juguetes.php?categoria=puzzles"
                class="btn btn-outline-primary filtro-btn">

                🧩 Puzzles

            </a>

            <a
                href="juguetes.php?categoria=construccion"
                class="btn btn-outline-primary filtro-btn">

                🧱 Construcción

            </a>

            <a
                href="juguetes.php?categoria=educativos"
                class="btn btn-outline-primary filtro-btn">

                🧠 Educativos

            </a>

            <a
                href="juguetes.php?categoria=manualidades"
                class="btn btn-outline-primary filtro-btn">

                🎨 Manualidades

            </a>

            <a
                href="juguetes.php?categoria=juegos"
                class="btn btn-outline-primary filtro-btn">

                🎲 Juegos de mesa

            </a>

        </div>

    </section>


    <main class="container pb-5">

        <div
            id="titulo-filtro"
            class="text-center mb-4">
        </div>


        <div
            id="lista-juguetes"
            class="row g-4">

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
    <script src="js/juguetes.js"></script>

</body>

</html>