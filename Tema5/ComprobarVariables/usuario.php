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

        if (isset($_POST["nombre"])) {
            $temp_nombre = depurar($_POST["nombre"]);
            $temp_nombre = preg_replace("/[ ]{2,}/", "", $temp_nombre); //Para eliminar los espacios de demas
        } else {
            $temp_nombre = "";
        }
        if (isset($_POST["apellidos"])) {
            $temp_apellidos = depurar($_POST["apellidos"]);
            $temp_apellidos = preg_replace("/[ ]{2,}/", "", $temp_apellidos);
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
            }
        }

        //Validacion y patron de nombre
        if (!strlen($temp_nombre) > 0) {
            $err_nombre = "El nombre es obligatorio";
        } else {
            if(strlen($temp_nombre) > 30 || strlen($temp_nombre) < 2) {
                $err_nombre = "No puede contener mas de 30 caracteres o menos de 2";
            }else{
                $patron ="/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";
                if (!preg_match($patron, $temp_nombre)) {
                    $err_nombre = "El nombre debe estar entre 2 y 30 caracteres";
                } else {
                    if(strlen($temp_nombre) > 30){
                        $err_nombre = "No puede contener mas de 30 caracteres";
                    }else{
                        $nombre = ucwords(strtolower($temp_nombre));
                    } 
                }
            }
        }

        //Validacion y patron de apellidos
        if (!strlen($temp_apellidos) > 0) {
            $err_apellidos = "El apellido es obligatorio";
        } else {
            if(strlen($temp_apellidos) > 30 || strlen($temp_apellidos) < 2) {
                $err_nombre = "No puede contener mas de 30 caracteres o menos de 2";
            }else{
                $patron ="/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";
                if (!preg_match($patron, $temp_apellidos)) {
                    $err_apellidos = "Los apellidos deben estar entre 2 y 30 caracteres";
                } else {
                    if(strlen($temp_apellidos) > 30){
                        $err_nombre = "No puede contener mas de 30 caracteres";
                    }else{
                        $apellidos = ucwords(strtolower($temp_apellidos));
                    } 
                }
            }
        }

        //Validacion y patron de fechas
        if (strlen($temp_fechaNacimiento) == 0){
            $err_fechaNacimiento = "La fecha de nacimiento es obligatoria";
        }else{
            $fecha_actual = date("Y-m-d"); //cojo la fecha actual
            list($anyo_actual, $mes_actual, $dia_actual) = explode("-", $fecha_actual);
            list($anyo, $mes, $dia) = explode("-", $temp_fechaNacimiento);
            if($anyo_actual-$anyo > 18){
                //es mayor de edad
                $fecha_nacimiento = $temp_fechaNacimiento;
            }else if($anyo_actual - $anyo < 18){
                $err_fechaNacimiento = "No puede ser menor de edad";
            }else{
                if($mes_actual - $mes > 0){
                    //mayor de edad
                    $fecha_nacimiento = $temp_fechaNacimiento;
                }else if($mes_actual - $mes < 0){
                    $err_fechaNacimiento = "No puedes ser menor de edad";
                }else{
                    if($dia_actual - $dia >= 0){
                        //exito
                        $fecha_nacimiento = $temp_fechaNacimiento;
                    }else{
                        $err_fechaNacimiento = "No puedes ser menor de edad";
                    }
                }
            }
        }

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
                    <?php if (isset($err_fechaNacimiento)) {
                        echo $err_fechaNacimiento;
                    } ?>
                </div>
                <input type="submit" value="Registrarse" class="btn btn-primary btn-sm">
            </fieldset>
        </form>
        <?php
            if(isset($usuario) && isset($nombre) && isset($apellidos) && isset($fecha_nacimiento)){
                echo "<h3>Usuario: $usuario</h3>";
                echo "<h3>Nombre: $nombre</h3>";
                echo "<h3>Apellidos: $apellidos</h3>";
                echo "<h3>Fecha de nacimiento: $fecha_nacimiento</h3>";
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>