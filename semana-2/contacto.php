<!DOCTYPE html>
<html lang="es">

    <head>

        <title>Nombre Interesante | Contacto</title>

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
                                class="nav-link"
                                href="servicios.php">

                                Servicios

                            </a>

                        </li>


                        <!-- Contacto -->
                        <li class="nav-item">

                            <a
                                class="nav-link active"
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
                    Contáctanos
                </h1>

                <p class="lead mt-3">
                    ¿Tienes alguna pregunta? Déjanos tu mensaje.
                </p>

            </div>

        </section>


        <!-- Formulario de contacto -->
        <main class="container py-5">

            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-6">

                    <div class="card shadow-sm">

                        <div class="card-body p-4">

                            <h2 class="text-center mb-4">
                                Formulario de contacto
                            </h2>


                            <form action="empresa.php" method="get">

                                <!-- Nombre -->
                                <div class="mb-3">

                                    <label
                                        for="nombre"
                                        class="form-label">

                                        Nombre:

                                    </label>


                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nombre"
                                        name="nombre"
                                        placeholder="Ingrese su nombre"
                                        required>

                                </div>


                                <!-- Correo -->
                                <div class="mb-3">

                                    <label
                                        for="email"
                                        class="form-label">

                                        Correo electrónico:

                                    </label>


                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Ingrese su correo"
                                        required>

                                </div>


                                <!-- Comentario -->
                                <div class="mb-3">

                                    <label
                                        for="comment"
                                        class="form-label">

                                        Mensaje:

                                    </label>


                                    <textarea
                                        class="form-control"
                                        rows="5"
                                        id="comment"
                                        name="text"
                                        placeholder="Escriba su mensaje aquí..."
                                        required></textarea>

                                </div>


                                <!-- Botón -->
                                <div class="d-grid">

                                    <button
                                        type="submit"
                                        class="btn btn-primary">

                                        Enviar mensaje

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </main>


        <!-- Información adicional -->
        <section class="bg-light py-5">

            <div class="container text-center">

                <h2>
                    También puedes encontrarnos
                </h2>

                <p>
                    Si necesitas información adicional sobre nuestros productos
                    o servicios, no dudes en comunicarte con nosotros.
                    (Intenté dejarlo todo más bonito de lo que dejamos de base, confío está bien)
                </p>

                <a
                    href="index.php"
                    class="btn btn-outline-secondary">

                    Volver al inicio

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
                                    for="loginEmail"
                                    class="form-label">

                                    Correo electrónico:

                                </label>


                                <input
                                    type="email"
                                    class="form-control"
                                    id="loginEmail"
                                    placeholder="Ingrese su correo"
                                    name="email"
                                    required>

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
                                    name="pswd"
                                    required>

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
