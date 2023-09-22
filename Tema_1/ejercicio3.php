<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Tema 1 Introducción</title>
</head>
<body>
    <h1>Ejercicio 3 Tema 1 Introducción</h1>
    <p>Mostrar los numeros impares del 1 al 20 en una lista</p>
    <ul>
        <?php
            for($i = 1; $i < 21; $i++){
                if($i % 2 != 0){
                    echo "<li>$i</li>";
                }
            }
        ?>
    </ul>
</body>
</html>