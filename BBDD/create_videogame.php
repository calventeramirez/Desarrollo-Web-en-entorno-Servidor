<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Videogame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"];
        $distribuidora = $_POST["distribuidora"];
        $precio = (float) $_POST["precio"];

        $sql = $conexion -> prepare("INSERT INTO videojuegos VALUES (?,?,?)");
        $sql -> bind_param("ssd", $titulo, $distribuidora, $precio); //ssd -> string, string, float(double en el bind)
        $sql -> execute();

        $conexion -> close();
    }
    ?>
    <div class = "container">
    <nav>
        <li><a href="index.php">Inicio</a></li>
    </nav>
        <h1>Nuevo videojuego</h1>
        <form action="" method = "post">
            <div class="mb-3">
                <label for="titulo" class = "form-laber">Titulo</label>
                <input type="text" class = "form-control" name = "titulo">
            </div>
            <div class="mb-3">
                <label for="distribuidora" class = "form-laber">Distribuidora</label>
                <input type="text" class = "form-control" name = "distribuidora">
            </div>
            <div class="mb-3">
                <label for="precio" class = "form-laber">Precio</label>
                <input type="number" class = "form-control" step="0.1"name = "precio">
            </div>
            <div class="mb-3">
                <input class = "btn btn-primary" type = "submit" value = "Crear">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>