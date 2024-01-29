<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA</title>
</head>
<body>
    <?php
        $apiUrl = "https://api.nasa.gov/planetary/apod";
        $apiKey = "Tv9e5VTJXRYlzLeNh1wedJ2ohAijfRKfZDNGypXk";
        $curl = curl_init(); //Inicializo la lista de la api
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $apiKey.":");
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);

        //print_r($array);
    ?>
    <p>Fecha: <?php echo $array["date"] ?></p>
    <img src ="<?php echo $array["url"] ?>">
    <p><?php echo $array["explanation"] ?></p>

</body>
</html>