<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../Funciones/base_de_datos_peliculas.php' ?>
    <?php require 'pelicula.php' ?>
</head>

<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id_pelicula = $_POST["id_pelicula"];
           echo "<p>La pelicula seleccionada es $id_pelicula</p>";
        }
    ?>
    <div class="container">
        <h1>Listado de Peliculas</h1>
        <div>
            <?php
            $sql = "SELECT * FROM peliculas";
            $resultado = $conexion->query($sql);
            $peliculas = [];
            while ($fila = $resultado->fetch_assoc()) {
                $nueva_pelicula = new Pelicula($fila["id_pelicula"], $fila["titulo"], $fila["fecha_estreno"], $fila["edad_recomendada"]);
                array_push($peliculas, $nueva_pelicula);
            }
            ?>
            <table class="table table-hover table-striped table-responsive">
                <thead class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Fecha de Estreno</th>
                        <th>Edad Recomendada</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($peliculas as $pelicula) { ?>
                        <tr>
                            <td><?php echo $pelicula->id_pelicula ?></td>
                            <td><?php echo $pelicula->titulo ?></td>
                            <td><?php echo $pelicula->fecha_estreno ?></td>
                            <td><?php echo $pelicula->edad_recomendada ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id_pelicula" value="<?php echo $pelicula->id_pelicula ?>">
                                    <input class="btn btn-warning" type="submit" value="Añadir">                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>