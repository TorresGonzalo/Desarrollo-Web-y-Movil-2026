<!DOCTYPE html>
<html lang="es">

<head>

    <title>Happy Kids | Inicio</title>

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
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Abrir menú">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div
                class="collapse navbar-collapse"
                id="menuPrincipal">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">

                        <a
                            class="nav-link active"
                            aria-current="page"
                            href="index.php">

                            Inicio

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="juguetes.php">

                            Juguetes

                        </a>

                    </li>



                    <li class="nav-item dropdown">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

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

                        <a
                            class="nav-link"
                            href="nosotros.php">

                            Nosotros

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="contacto.php">

                            Contacto

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            class="nav-link carrito-link"
                            href="carrito.php">

                            🛒 Carrito

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <main>

        <section class="hero-principal">

            <div class="container">

                <div class="hero-contenido text-center">

                    <span class="hero-etiqueta">
                        Jugar, descubrir y aprender
                    </span>

                    <h1>
                        HAPPY KIDS
                    </h1>

                    <p class="hero-eslogan">
                        Aprende jugando
                    </p>

                    <p class="hero-descripcion">
                        Descubre juguetes didácticos que convierten
                        cada momento de juego en una nueva oportunidad
                        para imaginar, crear y aprender.
                    </p>

                    <a
                        href="juguetes.php"
                        class="btn btn-primary btn-lg">

                        Ver juguetes

                    </a>

                </div>

            </div>

        </section>



        <section class="productos-destacados py-5">

            <div class="container">

                <div class="text-center seccion-titulo mb-5">

                    <span class="seccion-etiqueta">
                        Descubre nuestros favoritos
                    </span>

                    <h2>
                        Productos destacados
                    </h2>

                    <p>
                        Conoce algunos de los juguetes que tenemos
                        preparados para nuestros pequeños exploradores.
                    </p>

                </div>


                <div class="row g-4">



                    <div class="col-md-4">

                        <div class="card producto-card h-100">

                            <img
                                src="img/puzzle-animales.png"
                                class="card-img-top"
                                alt="Puzzle de animales">

                            <div class="card-body text-center">

                                <span class="producto-categoria">
                                    🧩 Puzzles
                                </span>

                                <h3 class="card-title">
                                    Puzzle de Animales
                                </h3>

                                <p class="card-text">
                                    Un divertido puzzle para aprender
                                    mientras juegas y descubres
                                    diferentes animales.
                                </p>

                                <p class="precio">
                                    $8.990
                                </p>

                                <a
                                    href="juguete.php?id=1"
                                    class="btn btn-outline-primary">

                                    Ver juguete

                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="card producto-card h-100">

                            <img
                                src="img/bloques-creativos.webp"
                                class="card-img-top"
                                alt="Bloques creativos">

                            <div class="card-body text-center">

                                <span class="producto-categoria">
                                    🧱 Construcción
                                </span>

                                <h3 class="card-title">
                                    Bloques Creativos
                                </h3>

                                <p class="card-text">
                                    Construye, imagina y crea tus
                                    propias aventuras mientras
                                    desarrollas tu creatividad.
                                </p>

                                <p class="precio">
                                    $12.990
                                </p>

                                <a
                                    href="juguete.php?id=2"
                                    class="btn btn-outline-primary">

                                    Ver juguete

                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="card producto-card h-100">

                            <img
                                src="img/osito-aventuras.png"
                                class="card-img-top"
                                alt="Osito de aventuras">

                            <div class="card-body text-center">

                                <span class="producto-categoria">
                                    🧸 Peluches
                                </span>

                                <h3 class="card-title">
                                    Osito de Aventuras
                                </h3>

                                <p class="card-text">
                                    Un compañero ideal para jugar,
                                    imaginar historias y acompañar
                                    cada aventura.
                                </p>

                                <p class="precio">
                                    $10.990
                                </p>

                                <a
                                    href="juguete.php?id=3"
                                    class="btn btn-outline-primary">

                                    Ver juguete

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="text-center mt-5">

                    <a
                        href="juguetes.php"
                        class="btn btn-primary">

                        Ver todos los juguetes

                    </a>

                </div>

            </div>

        </section>



        <section class="seccion-informativa py-5">

            <div class="container text-center">

                <span class="seccion-etiqueta">
                    Nuestra propuesta
                </span>

                <h2>
                    Jugar también es aprender
                </h2>

                <p class="lead">
                    En Happy Kids buscamos que cada juguete
                    sea una nueva experiencia para descubrir,
                    crear y aprender.
                </p>

                <a
                    href="nosotros.php"
                    class="btn btn-outline-dark">

                    Conoce Happy Kids

                </a>

            </div>

        </section>

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


</body>

</html>