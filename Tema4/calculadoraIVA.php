<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IVA</title>
</head>
<body>
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

        echo "<h3>". precioConIVA(10, "reducido")."</h3>";
        echo "<h3>". precioSinIVA(10, "reducido")."</h3>";
    ?>
</body>
</html>