<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Celcius, Kelvin, Farenheit</title>
</head>
<body>
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
</body>
</html>