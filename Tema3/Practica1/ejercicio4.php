<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $arrayMultidimensional = []; 
        $array1 = [];
        $array2 = [];
        //Relleno el primer array unidimensional
        for ($i = 0; $i < 10; $i++){
            $array1[$i] = rand(1, 10);
        }
        //Relleno el segundo array unidimensional
        for ($i = 0; $i < 10; $i++){
            $array2[$i] = rand(10, 100);
        }
        //Anexamos los dos arrays unidimensionales al multidimensional
        array_push($arrayMultidimensional, $array1);
        array_push($arrayMultidimensional, $array2);
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="10">Contenido</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($arrayMultidimensional as $fila){
                    echo "<tr>";
                    foreach($fila as $numeros){
                        echo "<td>$numeros</td>";
                    }
                    echo "</tr>";                    
                }
            ?>
        </tbody>
    </table>
    <?php
        //Calculamos los maximos y los minimos
        $maxArray1 = 0;
        $minArray1 = 10;
        $maxArray2 = 10;
        $minArray2 = 100;
        $mediaArray1f = 0;
        $mediaArray2f = 0;
        for ($i = 0; $i < 10; $i++){
            if($array1[$i] > $maxArray1){
                $maxArray1 = $array1[$i];
            }else if($array1[$i] < $maxArray1){
                $minArray1 = $array1[$i];
            }
            $mediaArray1f += $array1[$i];
        }
        $mediaArray1f /= count($array1);
        for ($i = 0; $i < 10; $i++){
            if($array2[$i] > $maxArray2){
                $maxArray2 = $array2[$i];
            }else if($array2[$i] < $maxArray2){
                $minArray2 = $array2[$i];
            }
            $mediaArray2f += $array2[$i];
        }
        $mediaArray2f /= count($array2);
    ?>
    <h2>El numero mayor del array 1 es: <?php echo "$maxArray1";?> y numero menor del array 1 es: <?php echo "$minArray1";?>. La media es <?php echo "$mediaArray1f"; ?></h2>
    <h2>El numero mayor del array 2 es: <?php echo "$maxArray2";?> y numero menor del array 2 es: <?php echo "$minArray2";?>. La media es <?php echo "$mediaArray2f"; ?></h2>

</body>
</html>