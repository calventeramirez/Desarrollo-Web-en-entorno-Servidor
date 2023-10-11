<?php
    //Ejercicio 1
    function eurosDolares(float|int $din) : float{
        return $din * 1.06;
    }

    function eurosYenes(float|int $din) : float{
        return $din * 157.56;
    }
    
    function dolarEuro(float|int $din) : float{
        return $din * 0.94;
    }

    function dolarYenes(float|int $din) : float{
        return $din * 148.73;
    }

    function yenEuro(float|int $din) : float{
        return $din * 0.0063;
    }

    function yenDolar(float|int $din) : float{
        return $din * 0.0067;
    }

    function cambiarDivisa(float|int $dinero, string $entrada, string $salida ) : float{
        $cambio = match(true){
            $entrada == "euro" && $salida == "dolar" => eurosDolares($dinero),
            $entrada == "euro" && $salida == "yen" => eurosYenes($dinero),
            $entrada == "dolar" && $salida == "euro" => dolarEuro($dinero),
            $entrada == "dolar" && $salida == "yen" => dolarYenes($dinero),
            $entrada == "yen" && $salida == "euro" => yenEuro($dinero),
            $entrada == "yen" && $salida == "dolar" => yenDolar($dinero),
            default => -1
        };
        return $cambio;
    }


    //Ejercicio 2
    function sumatorio(int $num) : int{
        if($num >= 0){
            $suma  = 0;
            for($i = 0; $i <= $num; $i++){
                $suma += $i;
            }
            return $suma;
        }else{
            return -1;
        }
    }

    function factorial (int $num) : int{
        if($num >= 1){
            $fact = 1;
            for($i = 1; $i <= $num; $i++){
                $fact *= $i;
            }
            return $fact;
        }else{
            return -1;
        }
    }

    //Ejercicio 3
    function comprobarEstado(int $numEsp) : string {
        if($numEsp == 0){
            return "Extinto";
        }else if($numEsp <= 500){
            return "En peligro crítico";
        }else if($numEsp <= 2000){
            return "En peligro";
        }else{
            return "Amenazado";
        }
    }

    function comprobarEspecimen(string $consulta, array $animales) : string{
        foreach($animales as $animal){
            list($nombre, $clase, $ejemplares) = $animal;
            if($nombre === $consulta){
                return comprobarEstado($ejemplares);
            }
        }
        return "No existe el especimen en la tabla";
    }
?>