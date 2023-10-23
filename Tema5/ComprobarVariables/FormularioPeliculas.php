<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <?php require '../Funciones/depurar.php' ?>
    <?php require '../Funciones/base_de_datos_peliculas.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["idPeliculas"])){
                $temp_id = depurar($_POST["idPeliculas"]);
            }else{
                $temp_id = "";
            }
            if(isset($_POST["titulo"])){
                $temp_titulo = depurar($_POST["titulo"]);
            }else{
                $temp_titulo = "";
            }
            if(isset($_POST["edadRecomendada"])){
                $temp_edadRecomendada = depurar($_POST["edadRecomendada"]);
            }else{
                $temp_edadRecomendada = "";
            }
            if(isset($_POST["fechaEstreno"])){
                $temp_fechaEstreno = depurar($_POST["fechaEstreno"]);
            }else{
                $temp_fechaEstreno = "";
            }

            //Validación del id
            if(strlen($temp_id) == 0){
                $err_id = "Es obligatoria la ID de la pelicula";
            }else{
                if($temp_id > 2000000 && $temp_id < 0){
                    $err_id = "La ide debe ser mayor que 0 y menor de 2000000";
                }else{
                    $temp_id = $idPeliculas;
                }
            }

            //Validacion del titulo
            if (!strlen($temp_titulo) > 0) {
                $err_titulo= "El titulo es obligatorio";
            } else {
                if(strlen($temp_titulo) > 80 || strlen($temp_titulo) < 2) {
                    $err_titulo = "No puede contener mas de 30 caracteres o menos de 2";
                }else{
                    $patron ="/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/";
                    if (!preg_match($patron, $temp_titulo)) {
                        $err_titulo = "El nombre debe estar entre 2 y 80 caracteres";
                    } else {
                        if(strlen($temp_titulo) > 80){
                            $err_titulo = "No puede contener mas de 80 caracteres";
                        }else{
                            $titulo = ucwords(strtolower($temp_titulo));
                        } 
                    }
                }
            }

            //Validacion edad

            //Validacion Fecha
        }
    ?>
    <div class="container">
        <h1>Formulario de películas</h1>
        <form action="" method="post">
            <fieldset>
                <div class="mb-3">
                    <label class="form-label">ID Películas: </label>
                    <input type="text" name="idPeliculas" class="form-control">
                    <?php if (isset($err_id)) {
                        echo $err_id;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Titulo: </label>
                    <input type="text" name="titulo" class="form-control">
                    <?php if (isset($err_titulo)) {
                        echo $err_titulo;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Edad Recomendada: </label>
                    <select name="edadRecomenda" class="form-select">
                        <option disabled selected hidden>Seleccione una opcion</option>
                        <option value="0">Todos los publicos</option>
                        <option value="3">+3</option>
                        <option value="7">+7</option>
                        <option value="12">+12</option>
                        <option value="16">+16</option>
                        <option value="18">+18</option>
                    </select>
                    <?php if (isset($err_apellidos)) {
                        echo $err_apellidos;
                    } ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de estreno: </label>
                    <input type="date" name="fechaEstreno" class="form-control">
                    <?php if (isset($err_fechaNacimiento)) {
                        echo $err_fechaNacimiento;
                    } ?>
                </div>
                <input type="submit" value="Registrarse" class="btn btn-primary btn-sm">
            </fieldset>
        </form>
        <?php
        if (isset($usuario) && isset($nombre) && isset($apellidos) && isset($fecha_nacimiento)) {
            echo "<h3>Usuario: $usuario</h3>";
            echo "<h3>Nombre: $nombre</h3>";
            echo "<h3>Apellidos: $apellidos</h3>";
            echo "<h3>Fecha de nacimiento: $fecha_nacimiento</h3>";
            $sql = "INSERT INTO usuarios (usuario, nombre, apellidos, fecha_nacimiento) VALUES ('$usuario', '$nombre', '$apellidos', '$fecha_nacimiento')";

            $conexion->query($sql);
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>