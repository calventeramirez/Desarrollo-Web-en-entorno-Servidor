<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Arrays</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $series =[
            ["Supernatural", "HBO", "16"],
            ["Juegos de tronos", "HBO", "8"],
            ["La que se avecina", "Amazon Prime", "15"],
            ["American Horror Story", "Disney +", "12"],
            ["Futurama", "Disney +", "11"]
        ];
    ?>
    <h3>Tabla como esta añadida</h3>
    <table>
        <thead>
            <tr>
                <th>Series</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($series as $serie){
                    list($nombre, $plataforma, $temporadas) = $serie;
                    echo "<tr><td>$nombre</td><td>$plataforma</td><td>$temporadas</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <h3>Tabla Ordenada por temporadas</h3>
    <table>
        <thead>
            <tr>
                <th>Series</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $temporada = array_column($series, 2);
                array_multisort($temporada, SORT_ASC, $series);
                foreach($series as $serie){
                    list($nombre, $plataforma, $temporadas) = $serie;
                    echo "<tr><td>$nombre</td><td>$plataforma</td><td>$temporadas</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <h3>Tabla Ordenada por plataforma y titulo</h3>
    <table>
        <thead>
            <tr>
                <th>Series</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nombre = array_column($series, 0);
                $plataforma = array_column($series, 1);
                array_multisort($plataforma, SORT_ASC, $nombre, SORT_ASC, $series);
                foreach($series as $serie){
                    list($nombre, $plataforma, $temporadas) = $serie;
                    echo "<tr><td>$nombre</td><td>$plataforma</td><td>$temporadas</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>