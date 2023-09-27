<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Arrays (DOC)</title>
    <link rel="stylesheet" href="../Tema2/CSS/estilos.css">
</head>
<body>
    <?php
        $arrays = [];
        for($i = 1; $i < 51; $i ++){
            array_push($arrays, $i);
        }
        print_r($arrays);
        echo "<br><br>";
        for($i = 0; $i < 50; $i++){
            if($arrays[$i] % 3 == 0){
                unset($arrays[$i]);
            }
        }
        print_r($arrays);
    ?>
</body>
</html>