<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tema 1 Introducción</title>
</head>
<body>
    <h1>Ejercicio 2 Tema 1 Introducción</h1>
    <p>Genera un numero aleatorio de -10 a 10 y mostrar si es positiv, negativo o cero</p>
    <?php
        $num = rand (-10, 10);
        if($num < 0){
            echo "El numero $num es negativo";
        }else if($num  == 0){
            echo "El numero $num es cero";
        }else{
            echo "El numero $num es positivo";
        }
    ?>
</body>
</html>