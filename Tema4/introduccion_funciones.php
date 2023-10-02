<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion de funciones</title>
</head>
<body>
    <?php
        function sumaDos($num1, $num2){
            //Las intrucciones necesarias
            return $num1 + $num2;
        }

        function sumaDosV2(int $num1, int $num2){
            //Las intrucciones necesarias
            return $num1 + $num2;
        }

        function sumaDosV3(int|float $num1, int|float $num2){
            //Las intrucciones necesarias
            return $num1 + $num2;
        }

        function sumaDosV4(int|float $num1, int|float $num2) : int{
            //Las intrucciones necesarias
            return $num1 + $num2;
        }

        $resultado = sumaDos(1, 3);
        echo "<h3>Resultado: $resultado</h3>";
        //Otra manera de sacar los dador de la funcion
        echo "<h3>Resultado: ".sumaDos(3,5)."</h3>";
        //No funciona en php lo siguiente, ya que son enteros lo que queramos
        //echo "<h3>Resultado: ".sumaDos("a", "b")."</h3>";
        $resultado = sumaDosV3(1.5, 3);
        echo "<h3>Resultado: $resultado</h3>";
        $resultado = sumaDosV4(1.5, 3);
        echo "<h3>Resultado: $resultado</h3>";
        
    ?>
</body>
</html>