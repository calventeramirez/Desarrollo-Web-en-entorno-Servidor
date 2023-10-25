<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../Funciones/base_de_datos_peliculas.php' ?>
</head>

<body>
    <div class="container">
        <h1>Listado de Peliculas</h1>
        <div>
            <?php
                $sql = "SELECT * FROM peliculas";
                $resultado = $conexion -> query($sql);
            ?>
            <table class = "table table-hover table-striped table-responsive">
                <thead class = "table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Fecha de Estreno</th>
                        <th>Edad Recomendada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = $resultado -> fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["id_pelicula"]."</td>";
                            echo "<td>".$row["titulo"]."</td>";
                            echo "<td>".$row["fecha_estreno"]."</td>";
                            echo "<td>".$row["edad_recomendada"]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>