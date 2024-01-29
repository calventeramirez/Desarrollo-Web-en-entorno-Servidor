<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Anime</title>
</head>
<body>
    <?php
        $id = $_GET["id"];
        $apiUrl = "https://api.jikan.moe/v4/anime/$id/full";

        $curl = curl_init(); //Inicializo la lista de la api
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);
        $animes = $array["data"];
    ?>
    <h1><?php echo $animes["titles"][0]["title"] ?></h1>
    <p><?php echo $animes["score"] ?></p>
    <p><?php echo $animes["synopsis"] ?></p>
    <img src="<?php echo $animes["images"]["jpg"]["image_url"] ?>">
</body>
</html>