<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Nombre Interesante | Inicio</title>
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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Empresa
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="empresa.php#quienes-somos">
                                        Quiénes Somos
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="empresa.php#equipo">
                                        Nuestro Equipo
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="empresa.php#mision">
                                        Misión
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">
                                Productos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">
                                Servicios
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">
                                Contacto
                            </a>
                        </li>

                    </ul>
                </div>

                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#myModal">
                    Acceder
                </button>

            </div>
        </nav>


        <!-- Contenido principal -->
        <main>

            <section class="bg-dark text-white text-center py-5">
                <div class="container">

                    <h1 class="display-4 fw-bold">
                        Bienvenido a mi página  
                    </h1>

                    <p class="lead mt-3">
                        Un espacio de prueba en el que le demuestro al profe que si entendi.
                    </p>

                    <div class="mt-4">
                        <a href="productos.php" class="btn btn-primary me-2">
                            Ver productos
                        </a>

                        <a href="servicios.php" class="btn btn-outline-light">
                            Conocer servicios
                        </a>
                    </div>

                </div>
            </section>


            <section class="container py-5">

                <div class="row text-center">

                    <div class="col-md-4 mb-4">
                        <h3> Productos</h3>
                        <p>
                            Descubre nuestra selección de productos relacionados con (tema que aun no da el profe).
                        </p>
                        <a href="productos.php" class="btn btn-outline-primary">
                            Ver productos
                        </a>
                    </div>

                    <div class="col-md-4 mb-4">
                        <h3> Servicios</h3>
                        <p>
                            Conoce los servicios que tenemos disponibles para usted, uduario promedio C:
                        </p>
                        <a href="servicios.php" class="btn btn-outline-primary">
                            Ver servicios
                        </a>
                    </div>

                    <div class="col-md-4 mb-4">
                        <h3> Contacto</h3>
                        <p>
                            ¿Tienes alguna pregunta? Ponte en contacto con nosotros mediante nuestro formulario.
                        </p>
                        <a href="contacto.php" class="btn btn-outline-primary">
                            Contactarnos
                        </a>
                    </div>

                </div>

            </section>

        </main>


        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-4">

            <div class="container">
                <strong>Nombre Interesante</strong>

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

                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <form action="empresa.php">

                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">
                                    Correo electrónico:
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Ingrese su correo"
                                    name="email"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="pwd" class="form-label">
                                    Contraseña:
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="pwd"
                                    placeholder="Ingrese su contraseña"
                                    name="pswd"
                                >
                            </div>

                            <div class="form-check mb-3">
                                <label class="form-check-label">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                    >

                                    Recordarme

                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Ingresar
                            </button>

                        </form>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Cerrar
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </body>
</html>
