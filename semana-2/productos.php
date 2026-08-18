<!DOCTYPE html>
<html lang="es">

    <head>

        <title>Nombre Interesante | Productos</title>

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
                                class="nav-link active"
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
        <section class="bg-primary text-white text-center py-5">

            <div class="container">

                <h1 class="display-5 fw-bold">
                    Nuestros Productos
                </h1>

                <p class="lead mt-3">
                    Como aun no nos dan el tema aca van fotos de los Guns n Roses.
                </p>

            </div>

        </section>


        <!-- Carrusel -->
        <section class="container py-5">

            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicadores -->
                <div class="carousel-indicators">

                    <button
                        type="button"
                        data-bs-target="#demo"
                        data-bs-slide-to="0"
                        class="active">
                    </button>

                    <button
                        type="button"
                        data-bs-target="#demo"
                        data-bs-slide-to="1">
                    </button>

                    <button
                        type="button"
                        data-bs-target="#demo"
                        data-bs-slide-to="2">
                    </button>

                </div>


                <!-- Imágenes -->
                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img
                            src="img/axl.jpg"
                            alt="Producto destacado 1"
                            class="d-block w-100">

                    </div>


                    <div class="carousel-item">

                        <img
                            src="img/guns.webp"
                            alt="Producto destacado 2"
                            class="d-block w-100">

                    </div>


                    <div class="carousel-item">

                        <img
                            src="img/slash.jpg"
                            alt="Producto destacado 3"
                            class="d-block w-100">

                    </div>

                </div>


                <!-- Controles -->
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#demo"
                    data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"></span>

                </button>


                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#demo"
                    data-bs-slide="next">

                    <span class="carousel-control-next-icon"></span>

                </button>

            </div>

        </section>


        <!-- Productos -->
        <section class="bg-light py-5">

            <div class="container">

                <div class="text-center mb-5">

                    <h2>
                        Productos destacados
                    </h2>

                    <p>
                        Una selección de ̶p̶r̶o̶d̶u̶c̶t̶o̶s̶  músicos que forman parte de nuestro catálogo.
                    </p>

                </div>


                <div class="row">

                    <!-- Producto 1 -->
                    <div class="col-md-4 mb-4">

                        <div class="card h-100 shadow-sm">

                            <div class="card-body text-center">

                                <h4 class="card-title">
                                    Axl Rose
                                </h4>

                                <p class="card-text">
                                    El que canta (o cantaba).
                                </p>

                                <a
                                    href="#"
                                    class="btn btn-outline-primary">

                                    Ver más

                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Producto 2 -->
                    <div class="col-md-4 mb-4">

                        <div class="card h-100 shadow-sm">

                            <div class="card-body text-center">

                                <h4 class="card-title">
                                    La banda junta
                                </h4>

                                <p class="card-text">
                                    La banda junta, con Axl Rose y Slash.
                                </p>

                                <a
                                    href="#"
                                    class="btn btn-outline-primary">

                                    Ver más

                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Producto 3 -->
                    <div class="col-md-4 mb-4">

                        <div class="card h-100 shadow-sm">

                            <div class="card-body text-center">

                                <h4 class="card-title">
                                    Slash
                                </h4>

                                <p class="card-text">
                                    El que toca la guitarra 
                                </p>

                                <a
                                    href="#"
                                    class="btn btn-outline-primary">

                                    Ver más

                                </a>

                            </div>

                        </div>

                    </div>

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
