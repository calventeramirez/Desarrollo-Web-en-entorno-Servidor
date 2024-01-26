<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Random</title>
</head>
<body>
    <?php
        $apiUrl = "https://api.jikan.moe/v4/random/anime";
        $curl = curl_init(); //Inicializo la lista de la api
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);
        // var_dump($array);
        $anime = $array["data"];
        $titulo = $anime["title"];
        $imagen = $anime["images"]["jpg"]["image_url"];
        $sinopsis = $anime["synopsis"];
    ?>
    <h1><?php echo $titulo ?></h1>
    <img src = "<?php echo $imagen ?>">
    <p><?php echo $sinopsis ?></p>
</body>
</html>