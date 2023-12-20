<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'database_conection.php'?>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $sql = $conexion -> prepare("SELECT * FROM comics");
            $sql -> execute();
            $comics = $sql -> get_result();
            $conexion -> close();
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $paginaMenor = $_POST["pagina1"];
            $paginaMayor = $_POST["pagina2"];
            if(isset($_POST["tipoGenero"]))
                $tipoGenero = $_POST["tipoGenero"];
            
            if(!isset($tipoGenero)){
                $sql = $conexion -> prepare("SELECT * FROM comics WHERE paginas BETWEEN ? AND ?");
                $sql -> bind_param("dd", $paginaMenor, $paginaMayor);
            }else if($paginaMayor == "" && $paginaMenor == "" && isset($tipoGenero)){
                $sql = $conexion -> prepare("SELECT * FROM comics WHERE genero = ?");
                $sql -> bind_param("s", $tipoGenero);
            }else if($paginaMayor != "" && $paginaMenor != "" && isset($tipoGenero)){
                $sql = $conexion -> prepare("SELECT * FROM comics WHERE genero = ? AND (paginas BETWEEN ? AND ?)");
                $sql -> bind_param("sdd", $tipoGenero, $paginaMenor, $paginaMayor);
            } 
            $sql -> execute();
            $comics = $sql -> get_result();
            $conexion -> close();
       }
    ?>
    <div class = "container">
        <h1>Listado de Comics</h1>
        <div class="mb-3 mt-2">
            <a href = "create_comic.php"><input type = "button" class="btn btn-primary" value = "Crear comics"></a>
        </div>
        <form action = "" method ="post">
            <div class = "col-2">
                <h4>Filtros</h4>
            </div>
            <div class = "row mb-2 mt-3">
                <div class="col-6 mb-2">
                    <input type="text" class = "form-control" name = "pagina1" placeholder = "Paginas menor">
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class = "form-control" name = "pagina2" placeholder="Paginas mayor">
                </div>
            </div>
            <div class = "row mt-2">
                <div class = "col-4 mb-3">
                    <select class ="form-select" name ="tipoGenero">
                        <option selected value ="" disabled hidden>Seleccione una opción</option>
                        <option value = "Acción">Acción</option>
                        <option value = "Aventuras">Aventuras</option>
                        <option value = "Romance">Romance</option>
                        <option value = "Comedia">Comedia</option>
                    </select>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>
        <table class = "table table-primary table-hover">
            <thead class= "table table-dark">
                <tr>
                    <th>Titulo</th>
                    <th>Páginas</th>
                    <th>Genero</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($fila = $comics -> fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$fila['titulo_comic']."</td>";
                        echo "<td>".$fila['paginas']."</td>";
                        echo "<td>".$fila['genero']."</td>";
                        echo "<td>";
                        ?>
                        <form action = "view_comic.php" method = "get">
                            <input type = "hidden" name ="titulo_comic" value="<?php echo $fila["titulo_comic"]?>" >
                            <input class = "btn btn-secondary" type = "submit" value = "Ver">
                        </form>
                        <?php
                        echo "</td>";
                        echo "<td>";
                        ?>
                        <form action = "delete_comic.php" method = "POST">
                        <input type = "hidden" name ="id_comic" value="<?php echo $fila["id_comic"]?>" >
                            <input class = "btn btn-danger" type = "submit" value = "Eliminar">
                        </form>
                        <?php
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>