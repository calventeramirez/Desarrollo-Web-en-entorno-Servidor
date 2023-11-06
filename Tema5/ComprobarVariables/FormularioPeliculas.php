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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["idPeliculas"])) {
            $temp_id = depurar($_POST["idPeliculas"]);
        } else {
            $temp_id = "";
        }
        if (isset($_POST["titulo"])) {
            $temp_titulo = depurar($_POST["titulo"]);
        } else {
            $temp_titulo = "";
        }
        if (isset($_POST["edadRecomenda"])) {
            $temp_edadRecomendada = depurar($_POST["edadRecomenda"]);
        } else {
            $temp_edadRecomendada = "";
        }
        if (isset($_POST["fechaEstreno"])) {
            $temp_fechaEstreno = depurar($_POST["fechaEstreno"]);
        } else {
            $temp_fechaEstreno = "";
        }
        
        // $nombre_imagen = $_FILES["imagen"]["name"];
        // $tipo_imagen = $_FILES["imagen"]["type"];
        // $tamaño_imagen = $_FILES["imagen"]["size"];
        // $ruta_temp = $_FILES["imagen"]["tmp_name"];
        // echo $nombre_imagen;
        // echo $tipo_imagen;
        // echo $tamaño_imagen;
        // echo $ruta_temp;
        $nombre_imagen = $_FILES["imagen"]["name"];
        $ruta_temp = $_FILES["imagen"]["tmp_name"];
        $ruta_final = "img/".$nombre_imagen;
        move_uploaded_file($ruta_temp, $ruta_final);

        //Validación del id
        if (strlen($temp_id) == 0) {
            $err_id = "Es obligatoria la ID de la pelicula";
        } else {
            if(filter_var($temp_id, FILTER_VALIDATE_INT) === false) {
                $err_id = "Introduce un numero";
            }else{
                if(strlen($temp_id) > 8){
                    $err_id = "No puede tener mas de 8 digitos el ID";
                }else{
                    $temp_id = (int) $temp_id;
                    $id = $temp_id;
                }
            }
        }

        //Validacion del titulo
        if (!strlen($temp_titulo) > 0) {
            $err_titulo = "El titulo es obligatorio";
        } else {
            if (strlen($temp_titulo) > 80) {
                $err_titulo = "No puede contener mas de 80 caracteres";
            } else {
                $titulo = ucwords(strtolower($temp_titulo));
            }
        }
        

        //Validacion edad Recomendada
        if (!strlen($temp_edadRecomendada) < 0) {
            $err_edadRecomendada  = "La edad recomendada debe existir";
        } else {
            $edades_rec = ["0", "3", "7", "12", "16", "18"];
            if(!in_array($temp_edadRecomendada, $edades_rec)){
                $err_edadRecomendada = "La edad Recomendada no es valida.";
            }else{
                $edad_recomendada = $temp_edadRecomendada;
            }
        }

        //Validacion Fecha
        if (strlen($temp_fechaEstreno) == 0) {
            $err_fechaEstreno = "La fecha de estreno es obligatoria";
        } else {
            list($anyo, $mes, $dia) = explode("-", $temp_fechaEstreno);
            if ($anyo < 1895){
                $err_fechaEstreno = "Aun no se habian inventado las peliculas";
            }else{
                $fechaEstreno = $temp_fechaEstreno;
            }
        }
    }
    ?>
    <div class="container">
        <h1>Formulario de películas</h1>
        <div class="col-9">
            <form action="" method="post" enctype="multipart/form-data">
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
                    <label class="form-label">Fecha de estreno: </label>
                    <input type="date" name="fechaEstreno" class="form-control">
                    <?php if (isset($err_fechaEstreno)) {
                        echo $err_fechaEstreno;
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
                    <?php if (isset($err_edadRecomendada)) {
                        echo $err_edadRecomendada;
                    } ?>
                </div>
                <div class = "mb-3">
                    <label class="form-label">Imagen: </label>
                    <input class = "form-control" type="file" name="imagen">
                </div>
                <input type="submit" value="Añadir Película" class="btn btn-primary btn-sm">
            </form>
        </div>
        <?php
        if (isset($id) && isset($titulo) && isset($fechaEstreno) && isset($edad_recomendada)) {
            echo "<h3>Exito</h3>";
            $sql = "INSERT INTO peliculas VALUES ($id, '$titulo', '$fechaEstreno', '$edad_recomendada', '$ruta_final')";

            $conexion->query($sql);
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>