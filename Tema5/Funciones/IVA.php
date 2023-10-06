<?php
        function porcentajeIVA (string $tipo) : float {
            if($tipo === "GENERAL"){
                return 1.21;
            }else if($tipo === "REDUCIDO"){
                return 1.10;
            }else if($tipo ==="SUPERREDUCIDO"){
                return 1.04;
            }else{
                return 0;
            }
        }

        function precioSinIVA(float|int $dinero, string $iva) : float{
            $iva = strtoupper($iva);
            $porcentaje = porcentajeIVA($iva);
            if($porcentaje > 0){
                return $dinero / $porcentaje;
            }else{
                return $dinero;
            }
        }

        function precioConIVA(float|int $dinero, string $iva) : float{
            $iva = strtoupper($iva);
            $porcentaje = porcentajeIVA($iva);
            if($porcentaje > 0){
                return $dinero * $porcentaje;
            }else{
                return $dinero;
            }
        }