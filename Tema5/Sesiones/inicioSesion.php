<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require "conexion.php"; ?>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $resultado = $conexion->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $contrasena_cifrada = $fila['contrasena'];
        }

        if ($resultado->num_rows == 0) {
    ?>
            <div class="alert alert-danger" role="alert">
                El usuario no existe
            </div>
            <?php
        } else {
            $acceso_valido = password_verify($contrasena, $contrasena_cifrada);
            if ($acceso_valido) {
                echo "Nos hemos validado con exito";
                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location: principal.php");
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    No nos hemos podido validar.
                </div>
    <?php
            }
        }
    }
    ?>
    <div class="container">
        <h1>Iniciar Sesion</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>