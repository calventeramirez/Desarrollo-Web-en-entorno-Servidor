<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
    <?php
        session_start();
        $sql = $conexion -> prepare("SELECT * FROM videojuegos");
        $sql -> execute();
        $videojuegos = $sql -> get_result();
        $conexion -> close();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["filtro"])){
                $_SESSION["filtro"] = $_POST["filtro"];
                header("Location: search_videogame.php");
            }
        }
    ?>
    <div class = "container">
        <form action = "" method ="post">
            <div class = "mb-2 mt-3">
                <input type="text" class = "form-control" name = "filtro">
                <select class ="form-select">
                    <option selected >Titulo</option>
                    <option>Distribuidora</option>
                </select>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary">Filtro</button>
            </div>
        </form>
        <h1>Listado de juegos</h1>
        <table class = "table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Titutlo</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($fila = $videojuegos -> fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$fila['titulo']."</td>";
                        echo "<td>".$fila['distribuidora']."</td>";
                        echo "<td>".$fila['precio']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>