<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Tema 1 Introducción</title>
</head>
<body>
    <h1>Ejercicio 4 Tema 1 Introducción</h1>
    <p>Mostrar, en español, el dia y el mes actual. Ej: "1 de enero"</p>
    <?php
        $day = date("j");
        $month = date("m");

        switch($month){
            case 1:
                echo "$day de Enero";
                break;
            case 2:
                echo "$day de Febrero";
                break;
            case 3:
                echo "$day de Marzo";
                break;
            case 4:
                echo "$day de Abril";
                break;
            case 5:
                echo "$day de Mayo";
            case 6:
                echo "$day de Junio";
                break;
            case 7:
                echo "$day de Julio";
                break;
            case 8:
                echo "$day de Agosto";
                break;
            case 9:
                echo "$day de Septiembre";
                break;
            case 10:
                echo "$day de Octubre";
                break;
            case 11:
                echo "$day de Noviembre";
                break;
            case 12:
                echo "$day de Diciembre";
        }
    ?>
</body>
</html>