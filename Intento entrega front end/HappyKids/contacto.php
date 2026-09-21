<!DOCTYPE html>
<html lang="es">

<head>

    <title>Happy Kids | Contacto</title>

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

                        <a
                            class="nav-link"
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

                        <a
                            class="nav-link"
                            href="nosotros.php">

                            Nosotros

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            class="nav-link active"
                            href="contacto.php">

                            Contacto

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            class="nav-link"
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
                Estamos para ayudarte
            </span>

            <h1>
                Contáctanos
            </h1>

            <p>
                ¿Tienes alguna pregunta?
                Déjanos tu mensaje.
            </p>

        </div>

    </header>



    <main class="container py-5">

        <div class="row g-5 align-items-center">




            <div class="col-lg-5">

                <img
                    src="img/contacto-happy-kids.jpg"
                    class="img-fluid imagen-contacto mb-4"
                    alt="Juguetes de Happy Kids">


                <span class="seccion-etiqueta">
                    Happy Kids
                </span>

                <h2 class="titulo-seccion">
                    Nos encantaría escucharte
                </h2>

                <p>
                    Si necesitas información sobre nuestros
                    juguetes o quieres realizar alguna consulta,
                    puedes escribirnos mediante el formulario.
                </p>

                <div class="contacto-dato">

                    <strong>
                        📧 Correo
                    </strong>

                    <p>
                        contacto@happykids.cl
                    </p>

                </div>

                <div class="contacto-dato">

                    <strong>
                        📍 Ubicación
                    </strong>

                    <p>
                        Santiago, Chile
                    </p>

                </div>

            </div>



            <div class="col-lg-7">

                <div class="contacto-formulario">

                    <h2>
                        Envíanos un mensaje
                    </h2>

                    <p>
                        Completa los siguientes datos.
                    </p>


                    <form
                        id="form-contacto">


                        <div class="mb-3">

                            <label
                                for="nombre"
                                class="form-label">

                                Nombre

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                placeholder="Ingrese su nombre"
                                required>

                        </div>


                        <div class="mb-3">

                            <label
                                for="email"
                                class="form-label">

                                Correo electrónico

                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Ingrese su correo"
                                required>

                        </div>


                        <div class="mb-3">

                            <label
                                for="mensaje"
                                class="form-label">

                                Mensaje

                            </label>

                            <textarea
                                class="form-control"
                                id="mensaje"
                                name="mensaje"
                                rows="6"
                                placeholder="Escriba su mensaje aquí..."
                                required></textarea>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary">

                            Enviar mensaje

                        </button>


                        <div
                            id="mensaje-enviado"
                            class="alert alert-success mt-3 d-none">

                            ¡Gracias por contactarnos!
                            Tu mensaje ha sido recibido.
                            //Mentira jasjjasj
                        </div>


                    </form>

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



    <script src="js/contacto.js"></script>

</body>

</html>