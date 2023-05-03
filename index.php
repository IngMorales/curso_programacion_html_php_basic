<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web</title>
    <script src="bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="bootstrap/css/estilo.css">
</head>

<body>
    <h3>
        <center>Hola Mundo en HTML</center>
    </h3>
    <header>
        <h1>Bienvenido a mi Página Web</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Web</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#acerca-de-mi">Acerca de mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="acerca-de-mi">
        <h3>Acerca de Mí</h3>
        <p>Soy un desarrollador web apasionado por la creación de paginas y aplicaciones en línea.</p>
    </section>

    <section id="servicios">
        <h3>Servicios</h3>
        <ul>
            <li>Diseño web.</li>
            <li>Desarrollo de aplicaciones web.</li>
            <li>Integración de sistemas.</li>
            <li>Administración de bases de datos.</li>
            <li>Producción multimedia.</li>
        </ul>
    </section>

    <section id="contacto">
        <h3>Formulario de Contacto</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="index.php" method="post">
                        <div class="card card-success">
                            <div class="card card-header">
                                <h3 class="card-title">Datos de Usuario</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="documento">Digite Documento</label>
                                    <input type="number" class="form-control" id="documento" name="documento" placeholder="Digite documento">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre">Digite Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido">Digite Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Digite apellido">
                                </div>

                                <div class="mb-3">
                                    <label for="operacion">Seleccione una Operación</label>
                                    <select class="form-select form-select-lg form-control" name="" id="">
                                        <option selected>Seleccione una operación</option>
                                        <option value="suma">Suma</option>
                                        <option value="resta">Resta</option>
                                        <option value="multiplicacion">Multiplicación</option>
                                        <option value="division">Dvisión</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="mensaje">Digite Mensaje</label>
                                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Digite mensaje"></textarea>
                                </div>
                                <div>
                                    <?php
                                    if (isset($_POST['documento']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['mensaje'])) {
                                        $documento = $_POST['documento'];
                                        $nombre = $_POST['nombre'];
                                        $apellido = $_POST['apellido'];
                                        $mensaje = $_POST['mensaje'];

                                        echo "<h5>Los datos son: " . $documento . " " . $nombre . " " . $apellido . "</h5>";
                                        echo "<p>Mensaje: " . $mensaje . "</p>";
                                    } else { ?>
                                        <script>
                                            alert("No se puede mostrar la información...");
                                        </script>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <footer>
        <p class="text-center">Derechos de Autor 2023 | Ing. Aldair Morales</p>
    </footer>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>