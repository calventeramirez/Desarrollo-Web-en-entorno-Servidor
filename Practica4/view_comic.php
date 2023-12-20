<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
<?php
    if(!isset($_GET["titulo_comic"])){
        header("location: index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $titulo = $_GET["titulo_comic"];
        $sql = $conexion -> prepare("SELECT * FROM comics WHERE titulo_comic = ?");
        $sql -> bind_param("s", $titulo);
        $sql -> execute();
        $comics = $sql -> get_result();
        $fila = $comics -> fetch_assoc();
        $conexion -> close();

        $id = $fila["id_comic"];
        $paginas = $fila["paginas"];
        $genero = $fila["genero"];
    }
    ?>
    <div class = "container">
        <h1>Ver datos del comic</h1>
        <div class = "row">
            <div class="col-2 mb-3 mt-2">
                <a href = "index.php"><input type = "button" class="btn btn-primary" value = "Volver"></a>
            </div>
            <div class="col-2 mt-2 mb-3">
                <form action="edit_comic.php" method = "get">
                    <input type = "hidden" name = "id_comic" value = "<?php echo $id ?>">
                    <button class = "btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
        <h3><?php echo $id ?></h3>
        <h3><?php echo $titulo ?></h3>
        <h3><?php echo $paginas ?></h3>
        <h3><?php echo $genero ?></h3>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>