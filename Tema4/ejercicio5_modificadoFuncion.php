<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Arrays Modificados con funciones</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        function obtenerCalificacion(int|float $p_cal) : string {
            $r_dev ="";
            $r_dev = match(true){
                $p_cal >= 0 && $p_cal < 5 => "Suspenso",
                $p_cal >= 5 && $p_cal < 7 => "Aprobado",
                $p_cal >=7 && $p_cal < 9 => "Notable",
                $p_cal >= 9 && $p_cal < 11 => "Sobresaliente",
                default => "Error"
            };  
            return $r_dev;
        }
        $alumnos = [
            ["Pepe Gonzales", rand(0, 10)],
            ["Manolo Perez", rand(0, 10)],
            ["Jose Carlos", rand(0, 10)],
            ["Fernando Gaus", rand(0, 10)],
            ["Jorge Rodrigez", rand(0, 10)]
        ];

        for($i = 0; $i < count($alumnos); $i++){
            $alumnos[$i][2] = obtenerCalificacion($alumnos[$i][1]);
        }

        $nombre = array_column($alumnos, 0);
        array_multisort($nombre, SORT_ASC, $alumnos);
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Calificación final</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                foreach($alumnos as $alumno){
                    list($nombre, $nota, $calificiacionFinal) = $alumno;
                    echo "<tr><td>$nombre</td><td>$nota</td><td>$calificiacionFinal</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
<!--
    Otra manera de las calificaciones
    $calificacion = match(true){
        $nota >= 0 && $nota < 5 => "Susp",
        $nota >= 5 && $nota < 7 => "Apr",
        $nota >=7 && $nota < 9 => "Not",
        $nota >= 9 && nota < 11 => "Sobr",
        default => "Error"
    };
-->