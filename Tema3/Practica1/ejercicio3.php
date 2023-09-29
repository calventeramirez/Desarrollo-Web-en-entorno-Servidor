<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado perfecto</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $raicesPerfectas = [];
        $i = 1;
        $contadorArray = 0;
        while($contadorArray < 50){
            $j = 1;
            while(($j * $j <= $i)){
                if($j * $j == $i){
                    $raicesPerfectas[$contadorArray][0] = $i;
                    $raicesPerfectas[$contadorArray][1] = $j;
                    $contadorArray++;
                }
                $j++;
            }
            $i++;
        }
    ?>
    <table>
        <thead>
            <tr>
                <td>Cuadrado</td>
                <td>Raiz</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($raicesPerfectas as $raizPerfecta){
                    list($cuadrado, $raiz) = $raizPerfecta;
                    echo "<tr><td>$cuadrado</td><td>$raiz</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>