<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos modificados con  funcion</title>
    <link rel="stylesheet" href="../Tema2/CSS/estilos.css">
</head>
<body>
    <?php
        function esPrimo(int $num) : bool {
            $primo = true;
            for($i = 2; $i <= $num - 1 && $primo; $i++){
                if($num % $i == 0){
                    $primo = false;
                }
            }
            return $primo;
        }
       function primoHasta(int $num) : array {
            $r_array = [];
           // $pun = 0;
            for($i = 2; $i <= $num; $i++){
                if(esPrimo($i)){
                    array_push($r_array, $i);
                    /*$r_array[$pun] = $i;
                    $pun++;*/
                }
            }
            return $r_array;
       }

       $array = primoHasta(50);
       for($i = 0; $i < count($array); $i++){
            echo "$array[$i] ";
       }
    ?>
</body>
</html>