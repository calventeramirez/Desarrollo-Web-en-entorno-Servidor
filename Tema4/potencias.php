<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <?php
        function potencia(int $base, int $exponente) : int{
            $resultado = 1;
            if($exponente >= 0){
                for($i = 1; $i <= $exponente; $i++){
                    $resultado *= $base;
                }
                return $resultado;
            }else {
                return 0;
            }
        }
    ?>
</body>
</html>