<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 2</title>
</head>
<body>
    <?php
        $array1 = array (
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        );
        $array2 = array('value1', 'value2', 'value3');
        print_r($array1);
        print("<br><br>");
        print_r($array2);
        print("<br><br>");
        //Crear el array con dni como clave y como valor el nombre
        $arrayPersona = array(
            "53899207H" => "Pablo Calvente",
            "58602514J" => "Pepe Gonzalez",
            "58605854L" => "Manolo Gonzalez",
            "78612508V" => "Mario Perez",
        );
        print_r($arrayPersona);
        print("<br><br>");
    ?>
</body>
</html>