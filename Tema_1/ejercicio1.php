<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Tema 1 Introducción</title>
</head>
<body>
    <h1>Ejercicio 1 Tema 1 Introducción</h1>
    <p>Generar un numero aleatorio del 1 al 10 y muestra si es par o impar</p>
    <?php
        $num = rand (1, 10);
        if($num % 2 == 0){
            echo "El numero $num es par";
        }else{
            echo "El numero $num es impar";
        }
    ?>
</body>
</html>