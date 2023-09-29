<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <?php
        for($i = 1; $i < 11; $i++){
            echo "<table>";
            echo "<caption>Tabla del $i</caption>";
            echo "<tbody>";
            for($j = 1; $j < 11; $j++){
                $mul = $i * $j;
                echo "<tr><td>$i x $j = $mul</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
    ?>
</body>
</html>