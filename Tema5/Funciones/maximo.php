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