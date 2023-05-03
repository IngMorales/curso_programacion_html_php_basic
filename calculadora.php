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
    <header>
        <h1 class="text-center">Calculadora en HTML + PHP</h1>
    </header>
    <section id="contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="calculadora.php" method="post">
                        <div class="card card-success">
                            <div class="card card-header">
                                <h3 class="card-title">Calculadora PHP</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="numero1">Número 1</label>
                                    <input type="number" class="form-control" id="numero1" name="numero1" placeholder="Digite número 1">
                                </div>
                                <div class="mb-3">
                                    <label for="numero2">Número 2</label>
                                    <input type="number" class="form-control" id="numero2" name="numero2" placeholder="Digite número 2">
                                </div>

                                <div class="mb-3">
                                    <label for="operacion">Seleccione una Operación</label>
                                    <select name="operacion" id="operacion" class="form-select form-select-lg form-control">
                                        <option selected>Seleccione una operación</option>
                                        <option value="suma">Suma</option>
                                        <option value="resta">Resta</option>
                                        <option value="multiplicacion">Multiplicación</option>
                                        <option value="division">Dvisión</option>
                                    </select>
                                </div>
                                <div>
                                    <?php
                                    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
                                        $operacion = $_POST['operacion'];
                                        $numero1 = $_POST['numero1'];
                                        $numero2 = $_POST['numero2'];

                                        if ($operacion == "suma") { ?>
                                            <div class="alert alert-info" role="alert">
                                                <h5>La suma de: <?php  echo $numero1."+".$numero2."=".($numero1 + $numero2); ?></h5>
                                            </div>
                                        <?php } else if ($operacion == "resta") {
                                            echo "<h5>La resta de: <a class='btn btn-warning btn-lg'>" . $numero1 . "-" . $numero2 . "=" . ($numero1 - $numero2) . "</a></h5>";
                                        } else if ($operacion == "multiplicacion") {
                                            echo "<h5>La multiplicación de: <a class='btn btn-success btn-lg'>" . $numero1 . "*" . $numero2 . "=" . ($numero1 * $numero2) . "</a></h5>";
                                        } else if ($operacion == "division") {
                                            echo "<h5>La división de: <a class='btn btn-danger btn-lg'>" . $numero1 . "/" . $numero2 . "=" . ($numero1 / $numero2) . "</a></h5>";
                                        } else {
                                        }
                                    } else { ?>
                                        <script>
                                            alert("No se puede mostrar la información...");
                                        </script>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Calcular</button>
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