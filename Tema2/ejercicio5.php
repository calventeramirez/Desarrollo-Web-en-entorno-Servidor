<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Arrays</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $alumnos = [
            ["Pepe Gonzales", rand(0, 10)],
            ["Manolo Perez", rand(0, 10)],
            ["Jose Carlos", rand(0, 10)],
            ["Fernando Gaus", rand(0, 10)],
            ["Jorge Rodrigez", rand(0, 10)]
        ];

        for($i = 0; $i < count($alumnos); $i++){
            switch($alumnos[$i][1]){
                case 0: case 1: case 2: case 3: case 4:
                    $alumnos[$i][2] = "Suspenso";
                    break;
                case 5: case 6:
                    $alumnos[$i][2] = "Aprobado";
                    break;
                case 7: case 8:
                    $alumnos[$i][2] = "Notable";
                    break;
                case 9: case 10:
                    $alumnos[$i][2] = "Sobresaliente";
                    break;
                default:
                $alumnos[$i][2] = "ERROR";
            }
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