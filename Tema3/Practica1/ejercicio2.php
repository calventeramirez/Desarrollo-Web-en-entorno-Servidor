<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas Andalucía</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $temperaturas = [
            ["Málaga", 20, 27],
            ["Sevilla", 17, 36],
            ["Cádiz", 19, 31],
            ["Jaén", 19, 33],
            ["Granada", 12, 35],
            ["Almería", 20, 27],
            ["Huelva", 16, 33]
        ];

        //Apartado 1
        for($i = 0; $i < count($temperaturas); $i++){
            $media = ($temperaturas[$i][1] + $temperaturas[$i][2]) / 2;
            $temperaturas[$i][3] = $media;
        }

        //Apartado 2
        $nombre = array_column($temperaturas, 0);
        $tempMin = array_column($temperaturas, 1);
        
        array_multisort($tempMin, SORT_ASC, $nombre, SORT_ASC, $temperaturas);

        //Apartado 3
        $tempMediaMax = 0;
        $tempMediaMin = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th>Provincia</th>
                <th>Temperatura Minima</th>
                <th>Temperatura Maxima</th>
                <th>Temperatura Media</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < count($temperaturas); $i++){
                    list($nombre, $tempMini, $temMax, $tempMedia) = $temperaturas[$i];
                    $tempMediaMax += $temMax;
                    $tempMediaMin += $tempMini;
                    echo "<tr><td>$nombre</td><td>$tempMini</td><td>$temMax</td><td>$tempMedia</td></tr>";
                }
                $tempMediaMax /= count($temperaturas);
                $tempMediaMin /= count($temperaturas);
            ?>
        </tbody>
    </table>
    <!--Apartado 4-->
    <h2>La temperatura media <strong>minima</strong> es: <?php echo "$tempMediaMin";?>.</h2>
    <h2>La temperatura media <strong>maxima</strong> es: <?php echo "$tempMediaMax";?>.</h2>
</body>
</html>