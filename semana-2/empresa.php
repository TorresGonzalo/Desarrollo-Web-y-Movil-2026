<!DOCTYPE html>
<html lang="es">

    <head>

        <title>Nombre Interesante | Empresa</title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    </head>


    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div class="container-fluid">

                <a class="navbar-brand fw-bold" href="index.php">
                    Nombre Interesante
                </a>


                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">

                    <span class="navbar-toggler-icon"></span>

                </button>


                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <ul class="navbar-nav">

                        <!-- Empresa -->
                        <li class="nav-item dropdown">

                            <a
                                class="nav-link dropdown-toggle active"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown">

                                Empresa

                            </a>


                            <ul class="dropdown-menu">

                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#quienes-somos">

                                        Quiénes Somos

                                    </a>
                                </li>


                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#equipo">

                                        Nuestro Equipo

                                    </a>
                                </li>


                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="#mision">

                                        Misión

                                    </a>
                                </li>

                            </ul>

                        </li>


                        <!-- Productos -->
                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="productos.php">

                                Productos

                            </a>

                        </li>


                        <!-- Servicios -->
                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="servicios.php">

                                Servicios

                            </a>

                        </li>


                        <!-- Contacto -->
                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="contacto.php">

                                Contacto

                            </a>

                        </li>

                    </ul>

                </div>


                <!-- Botón acceder -->
                <button
                    type="button"
                    class="btn btn-outline-light"
                    data-bs-toggle="modal"
                    data-bs-target="#myModal">

                    Acceder

                </button>

            </div>

        </nav>


        <!-- Encabezado -->
        <section class="bg-secondary text-white text-center py-5">

            <div class="container">

                <h1 class="display-5 fw-bold">
                    Conoce nuestra empresa
                </h1>

                <p class="lead mt-3">
                    Un poco más sobre quiénes somos, nuestro equipo y lo que queremos lograr.
                </p>

            </div>

        </section>


        <!-- Quiénes Somos -->
        <section id="quienes-somos" class="container py-5">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h2>
                        ¿Quiénes Somos?
                    </h2>

                    <p>
                        Somos una empresa creada con la idea de entregar
                        productos y servicios de calidad a nuestros usuarios.
                    </p>

                    <p>
                        Nuestro objetivo es crear una experiencia sencilla,
                        cercana y agradable para todas las personas que visiten
                        nuestro sitio.
                    </p>

                </div>


                <div class="col-md-6">

                    <div class="card shadow-sm">

                        <div class="card-body text-center">

                            <h3 class="card-title">
                                Nombre Interesante
                            </h3>

                            <p class="card-text">
                                Un proyecto en constante crecimiento,
                                creado para esta página.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- Nuestro Equipo -->
        <section id="equipo" class="bg-light py-5">

            <div class="container">

                <div class="text-center mb-4">

                    <h2>
                        Nuestro Equipo
                    </h2>

                    <p>
                        Las personas detrás de este proyecto.
                    </p>

                </div>


                <div class="row">

                    <div class="col-md-4 mb-4">

                        <div class="card h-100 text-center">

                            <div class="card-body">

                                <h4 class="card-title">
                                    Integrante 1
                                </h4>

                                <p class="card-text">
                                    Yo
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4 mb-4">

                        <div class="card h-100 text-center">

                            <div class="card-body">

                                <h4 class="card-title">
                                    Integrante 2
                                </h4>

                                <p class="card-text">
                                    Tambien yo
                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-4 mb-4">

                        <div class="card h-100 text-center">

                            <div class="card-body">

                                <h4 class="card-title">
                                    Integrante 3
                                </h4>

                                <p class="card-text">
                                    Y yo tambien
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- Misión -->
        <section id="mision" class="container py-5">

            <div class="row">

                <div class="col-md-8 mx-auto text-center">

                    <h2>
                        Nuestra Misión
                    </h2>

                    <p class="lead">
                        Busco sacar buena nota en el ramo.
                    </p>

                    <p>
                        Espero este quedando bien, y me ponga buen avance  
                    </p>

                </div>

            </div>

        </section>


        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-4">

            <div class="container">

                <strong>
                    Nombre Interesante
                </strong>

                <p class="mb-0 mt-2">
                     2026 - Proyecto académico
                </p>

            </div>

        </footer>


        <!-- Modal de acceso -->
        <div class="modal fade" id="myModal">

            <div class="modal-dialog">

                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 class="modal-title">
                            Autenticación
                        </h4>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                        </button>

                    </div>


                    <!-- Modal body -->
                    <div class="modal-body">

                        <form action="empresa.php">

                            <div class="mb-3 mt-3">

                                <label
                                    for="email"
                                    class="form-label">

                                    Correo electrónico:

                                </label>


                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Ingrese su correo"
                                    name="email">

                            </div>


                            <div class="mb-3">

                                <label
                                    for="pwd"
                                    class="form-label">

                                    Contraseña:

                                </label>


                                <input
                                    type="password"
                                    class="form-control"
                                    id="pwd"
                                    placeholder="Ingrese su contraseña"
                                    name="pswd">

                            </div>


                            <div class="form-check mb-3">

                                <label class="form-check-label">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember">

                                    Recordarme

                                </label>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary">

                                Ingresar

                            </button>

                        </form>

                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">

                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">

                            Cerrar

                        </button>

                    </div>

                </div>

            </div>

        </div>


    </body>

</html>
