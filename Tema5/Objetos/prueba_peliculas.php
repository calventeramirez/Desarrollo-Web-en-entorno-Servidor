<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Películas</title>
    <?php require 'pelicula.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
</head>

<body>
    <?php
    $pelicula1 = new Pelicula(1, "Spiderman", "2020-01-01", "7");
    $pelicula2 = new Pelicula(2, "Batman", "2023-01-01", "18");
    $pelicula3 = new Pelicula(3, "Superman", "2025-01-01", "12");
    $peliculas = [$pelicula1, $pelicula2, $pelicula3];
    ?>
    <table class = "table table-primary table-hover">
        <thead class = "table table-dark">
            <tr>
                <th>Titulo</th>
                <th>Fecha de estreno</th>
                <th>Edad recomendada</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($peliculas as $pelicula) {
                echo "<tr>";
                echo "<td>" . $pelicula->titulo . "</td>";
                echo "<td>" . $pelicula->fecha_estreno . "</td>";
                echo "<td>" . $pelicula->edad_recomendada . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>