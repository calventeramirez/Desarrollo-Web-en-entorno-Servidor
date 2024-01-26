<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Anime</title>
</head>
<body>
    <form action="" method ="POST">
        Titulo: <input type = "text" name = "titulo">
        <br><br>
        <input type = "submit" value="Buscar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $titulo = $_POST["titulo"];
            $titulo = preg_replace('/\s+/', '+', $titulo);
            $apiUrl = "https://api.jikan.moe/v4/anime?q=$titulo";

            $curl = curl_init(); //Inicializo la lista de la api
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $respuesta = curl_exec($curl);
            $array = json_decode($respuesta, true);
            $animes = $array["data"];
            
            foreach($animes as $anime){
                $imagen = $anime["images"]["jpg"]["image_url"];
                $sinopsis = $anime["synopsis"];
                ?>
                <h1><?php echo $anime["title"]?></h1>
                <img src = "<?php echo $imagen ?>">
                <p><?php echo $sinopsis ?></p>
            <?php }
        }
    ?>

</body>
</html>