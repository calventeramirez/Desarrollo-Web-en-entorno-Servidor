<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <?php require '../Funciones/depurar.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["usuario"])) {
            $temp_usuario = depurar($_POST["usuario"]);
        } else {
            $temp_usuario = "";
        }
        $temp_edad = depurar($_POST["edad"]);
        if (isset($_POST["nombre"])) {
            $temp_nombre = depurar($_POST["nombre"]);
        } else {
            $temp_nombre = "";
        }
        if (isset($_POST["apellidos"])) {
            $temp_apellidos = depurar($_POST["apellidos"]);
        } else {
            $temp_apellidos = "";
        }
        if (isset($_POST["fechaNacimiento"])) {
            $temp_fechaNacimiento = depurar($_POST["fechaNacimiento"]);
        } else {
            $temp_fechaNacimiento = "";
        }

        //Validación y patrón del usuario
        if (!strlen($temp_usuario) > 0) {
            $err_usario = "El nombre de usuario es obligatorio";
        } else {
            $patron = "/^[a-zA-Z0-9]{4,8}$/";
            if (!preg_match($patron, $temp_usuario)) {
                $err_usario = "El usuario debe tener entre 4 y 8 caracteres y contener solamente letras o numeros";
            } else {
                $usuario = $temp_usuario;
                echo $usuario;
            }
        }

        //Validación y patrón de la edad
        if (!strlen($temp_edad) > 0) {
            $err_edad = "La edad del usuario es obligatorio";
        } else {
            $patron = "/^[0-9]{1,3}$/";
            if (!preg_match($patron, $temp_edad)) {
                $err_edad = "La edad debe ser entre un digito y tres digitos";
            } else {
                if (!filter_var($temp_edad, FILTER_VALIDATE_INT)) {
                    $err_edad = "La edad debe ser un numero entero";
                } else {
                    $temp_edad = (int) $temp_edad;
                    if ($temp_edad < 18) {
                        $err_edad = "Error. La edad debe ser mayor que 18 años";
                    } else {
                        $edad = $temp_edad;
                        echo $edad;
                    }
                }
            }
        }

        //Validacion y patron de nombre
        if (!strlen($temp_nombre) > 0) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            $patron ="/^[a-zA-Z][a-zA-Z ]{1,29}$/";
            if (!preg_match($patron, $temp_nombre)) {
                $err_nombre = "El nombre debe estar entre 2 y 30 caracteres";
            } else {
                $nombre = ucwords(strtolower($temp_nombre));
                echo $nombre;
            }
        }

        //Validacion y patron de apellidos
        if (!strlen($temp_apellidos) > 0) {
            $err_apellidos = "Los apellidos son obligatorios";
        } else {
            $patron = "/^[a-zA-Z][a-zA-Z ]{1,29}$/";
            if (!preg_match($patron, $temp_apellidos)) {
                $err_apellidos = "Los apellidos debe estar entre 2 y 30 caracteres";
            } else {
                $apellidos = ucwords(strtolower($temp_apellidos));
                echo $apellidos;
            }
        }

        //Validacion y patron de fechas


    }
    ?>
    <div class="container">
        <h1>Formulario de usuario</h1>
        <form action="" method="post">
            <fieldset>
                <div class="mb-3">
                    <label class="form-label">Usuario: </label>
                    <input type="text" name="usuario" class="form-control">
                    <?php if (isset($err_usario)) {
                        echo $err_usario;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Edad: </label>
                    <input type="text" name="edad" class="form-control">
                    <?php if (isset($err_edad)) {
                        echo $err_edad;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre: </label>
                    <input type="text" name="nombre" class="form-control">
                    <?php if (isset($err_nombre)) {
                        echo $err_nombre;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellidos: </label>
                    <input type="text" name="apellidos" class="form-control">
                    <?php if (isset($err_apellidos)) {
                        echo $err_apellidos;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Nacimiento: </label>
                    <input type="date" name="fechaNacimiento" class="form-control">

                </div>
                <input type="submit" value="Registrarse" class="btn btn-primary btn-sm">
            </fieldset>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>