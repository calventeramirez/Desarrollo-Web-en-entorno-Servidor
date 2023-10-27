<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Películas</title>
    <?php require 'pelicula.php' ?>
</head>
<body>
    <?php
        $pelicula1 = new Pelicula(1, "Spiderman", "2020-01-01", "7");
        $pelicula2 = new Pelicula(2, "Batman", "2023-01-01", "18");
        $pelicula3 = new Pelicula(3, "Superman", "2025-01-01", "12");
        $peliculas = [$pelicula1, $pelicula2, $pelicula3];
        foreach ($peliculas as $pelicula) {
            echo "<p>Titulo: ".$pelicula->titulo."</p>";
            echo "<p> Fecha de estreno: ".$pelicula->fecha_estreno."</p>";
            echo "<p>Edad Recomendada: ".$pelicula->edad_recomendada."</p><br>";
        }
    ?>
</body>
</html>