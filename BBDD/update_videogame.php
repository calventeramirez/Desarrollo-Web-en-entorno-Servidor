<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Videogame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
    <?php
    if(!isset($_GET["titulo"])){
        header("location: index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $titulo = $_GET["titulo"];
        $sql = $conexion -> prepare("SELECT * FROM videojuegos WHERE titulo = ?");
        $sql -> bind_param("s", $titulo);
        $sql -> execute();
        $videojuegos = $sql -> get_result();
        $fila = $videojuegos -> fetch_assoc();
        $conexion -> close();

        $distribuidora = $fila["distribuidora"];
        $precio = $fila["precio"];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo_original"];
        $tituloNuevo = $_POST["titulo"];
        $distribuidora = $_POST["distribuidora"];
        $precio = $_POST["precio"];

        $sql = $conexion -> prepare("UPDATE videojuegos SET titulo = ?, distribuidora = ?, precio = ? WHERE titulo = ?");
        $sql -> bind_param("ssds", $tituloNuevo, $distribuidora, $precio, $titulo);
        $sql -> execute();
        $conexion -> close();
        header("Location: index.php");
    }

    ?>
    <div class = "container">
        <h1>Update videogame</h1>
        <form method = "POST" action = "">
            <input type="hidden" name = "titulo_original" value = "<?php echo $titulo ?>">
            <div class = "mb-3 mt-2">
                <label class = "form-label">Titulo</label>
                <input type = "text" name ="titulo" value="<?php echo $titulo ?>" class = "form-control">
            </div>
            <div class = "mb-3 mt-2">
                <label class = "form-label">Distribuidora</label>
                <input type = "text" name ="distribuidora" value="<?php echo $distribuidora ?>" class = "form-control">
            </div>
            <div class = "mb-3 mt-2">
                <label class = "form-label">Precio</label>
                <input type = "text" name ="precio" value="<?php echo $precio ?>" class = "form-control">
            </div>
            <button class = "btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>