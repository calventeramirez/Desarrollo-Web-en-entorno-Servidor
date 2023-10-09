<!--Temperaura, max3, potencia, primos-->

<!-- Temperaturas-->
<?php
        function celsiusAFahrenheit(int|float $valor) : float{
            return ($valor * 1.8) + 32;
        }
        function fahrenheitACelcius(int|float $valor) : float{
            return ($valor - 32) /1.8;
        }
        function celsiusAKelvin(int|float $valor) : float{
            return ($valor + 273.15);
        }
        function kelvinACelcius(int|float $valor) : float{
            return ($valor - 273.15);
        }
        function kelvinAFahrenheit(int|float $valor) : float{
            return 1.8 * ($valor - 273.15) + 32;
        }
        function fahrenheitAKelvin(int|float $valor) : float{
            return 1.8 * ($valor - 32) + 273.15;
        }

        function calculadora (int|float $valor, string $u1, string $u2) : float{
            $temp = match(true){
                $u1 == "C" && $u2 == "F" => celsiusAFahrenheit($valor),
                $u1 == "F" && $u2 == "C" => fahrenheitACelcius($valor),
                $u1 == "C" && $u2 == "K" => celsiusAKelvin($valor),
                $u1 == "K" && $u2 == "C" => kelvinACelcius($valor),
                $u1 == "K" && $u2 == "F" => kelvinAFahrenheit($valor),
                $u1 == "F" && $u2 == "K" => fahrenheitAKelvin($valor),
                default => -10000000000000000
            };
            return $temp;
        }
?>

<!--Max-3-->
<?php
    function maximo(int|float $num1, int|float $num2, int|float $num3) : string{
        if($num1 == $num2 && $num2 == $num3){
            return "Los tres numeros son iguales";
        }else{
            $salida = $num1;
            if($salida < $num2) $salida = $num2;
            if($salida < $num3) $salida = $num3;
            
            return "El mayor es: $salida";
        }
        
    }
?>


<!--Potencia-->
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

<!--Primos-->
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
?>