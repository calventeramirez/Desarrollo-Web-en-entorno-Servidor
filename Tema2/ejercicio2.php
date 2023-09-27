<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Arrays</title>
</head>
<body>
    <?php
        $numeros = [];
        for($i = 1; $i < 11; $i++){
            array_push($numeros, rand(0, 100));
        }
        sort($numeros);
        print_r($numeros);
        echo "<br>";
        rsort($numeros);
        print_r($numeros);
    ?>
</body>
</html>