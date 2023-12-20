<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
    <div class = "container">
        <?php
            if(!isset($_GET["id_comic"])){
                header("location: index.php");
            }
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                $id_comic = (int)$_GET["id_comic"];
                $sql = $conexion -> prepare("SELECT * FROM comics WHERE id_comic = ?");
                $sql -> bind_param("d", $id_comic);
                $sql -> execute();
                $comics = $sql -> get_result();
                $fila = $comics -> fetch_assoc();
                $conexion -> close();

                $titulo = $fila["titulo_comic"];
                $paginas = $fila["paginas"];
                $genero = $fila["genero"];
            }
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $id = $_POST["id"];
                $titulo = $_POST["titulo_comic"];
                $paginas = $_POST["paginas"];
                $genero = $_POST["genero"];
        
                $sql = $conexion -> prepare("UPDATE comics SET titulo_comic = ?, paginas = ?, genero = ? WHERE id_comic = ?");
                $sql -> bind_param("sdsd", $titulo, $paginas, $genero, $id);
                $sql -> execute();
                $conexion -> close();
                header("Location: index.php");
            }
        ?>
        <h1>Editar comic</h1>
        <div class="mb-3 mt-2">
            <a href = "index.php"><input type = "button" class="btn btn-primary" value = "Inicio"></a>
        </div>
        <form method = "POST">
            <input type = "hidden" name = "id" value = "<?php echo $id_comic; ?>">
            <div class = "row">
                <div class = "col-2 mb-3">
                    <label class = "form-label">Titulo</label>
                </div>
                <div class = "col-8 mb-3">
                    <input class = "form-control" type="text" name = "titulo_comic" value = "<?php echo $titulo; ?>">
                </div>
            </div>
            <div class = "row">
                <div class = "col-2 mb-3">
                    <label class = "form-label">Páginas</label>
                </div>
                <div class = "col-8 mb-3">
                    <input class = "form-control" type="number" step = "1" name = "paginas" value = "<?php echo $paginas; ?>">
                </div>
            </div>
            <div class = "row">
                <div class = "col-2 mb-3">
                    <label class = "form-label">Genero</label>
                </div>
                <div class = "col-8 mb-3">
                    <select class = "form-select" name = "genero">
                        <option selected value ="<?php echo $genero; ?>" hidden><?php echo $genero; ?></option>
                        <option value = "Acción">Acción</option>
                        <option value = "Aventuras">Aventuras</option>
                        <option value = "Romance">Romance</option>
                        <option value = "Comedia">Comedia</option>
                    </select>
                </div>
            </div>
            <div class = "row">
                <button class = "btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>