<!DOCTYPE html>
<html lang="es">

    <head>

        <title>Nombre Interesante | Servicios</title>

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
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown">

                                Empresa

                            </a>


                            <ul class="dropdown-menu">

                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="empresa.php#quienes-somos">

                                        Quiénes Somos

                                    </a>
                                </li>


                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="empresa.php#equipo">

                                        Nuestro Equipo

                                    </a>
                                </li>


                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="empresa.php#mision">

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
                                class="nav-link active"
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
        <section class="bg-info text-dark text-center py-5">

            <div class="container">

                <h1 class="display-5 fw-bold">
                    Nuestros Servicios
                </h1>

                <p class="lead mt-3">
                    Dele profe con los temas, que no se que poner por mientras jaja.
                </p>

            </div>

        </section>


        <!-- Servicios -->
        <section class="container py-5">

            <div class="text-center mb-5">

                <h2>
                    ¿Qué ofrecemos?
                </h2>

                <p>
                    Contamos con diferentes servicios pensados para obtener la mejor nota.
                </p>

            </div>


            <div class="row">


                <!-- Servicio 1 -->
                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body text-center">

                            <h3 class="card-title">
                                Servicio 01
                            </h3>

                            <p class="card-text">
                                Le entrego la tarea dentro de plazo
                            </p>

                            <button
                                type="button"
                                class="btn btn-outline-primary">

                                Más información

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Servicio 2 -->
                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body text-center">

                            <h3 class="card-title">
                                Servicio 02
                            </h3>

                            <p class="card-text">
                                Ya no tengo ideas para mas texto sin un tema
                            </p>

                            <button
                                type="button"
                                class="btn btn-outline-primary">

                                Más información

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Servicio 3 -->
                <div class="col-md-4 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body text-center">

                            <h3 class="card-title">
                                Servicio 03
                            </h3>

                            <p class="card-text">
                                Este botón tampoco funciona (aun).
                            </p>

                            <button
                                type="button"
                                class="btn btn-outline-primary">

                                Más información

                            </button>

                        </div>

                    </div>

                </div>


            </div>

        </section>


        <!-- Sección de contacto -->
        <section class="bg-light py-5">

            <div class="container text-center">

                <h2>
                    ¿Necesitas más información?
                </h2>

                <p class="lead">
                    Si tienes alguna duda sobre nuestros servicios,
                    puedes comunicarte con nosotros.
                </p>

                <a
                    href="contacto.php"
                    class="btn btn-primary">

                    Ir a Contacto

                </a>

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
