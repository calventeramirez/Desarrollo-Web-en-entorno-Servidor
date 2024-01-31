<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        $apiURLCategorias = "https://api.chucknorris.io/jokes/categories";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiURLCategorias);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        $array = json_decode($respuesta, true);
    ?>
    <div class = "col-7">
        <form method = "POST" action="">
            <label class ="form-label">Categoria:</label> <select class = "form-select" name = "categoria">
                <?php
                    foreach($array as $cat){
                        ?>
                            <option value = "<?php echo $cat ?>"><?php echo $cat ?></option>
                        <?php
                    }
                ?>
            </select>
            <br>
            <input class = "btn btn-secondary" type = "submit" value="Buscar">
        </form>
    </div>
    <?php
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            $categoria = $_POST["categoria"];
            $cat = "category=$categoria";
            $apiURL = "https://api.chucknorris.io/jokes/random?$cat";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $apiURL);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $respuesta2 = curl_exec($curl);
            $array2 = json_decode($respuesta2, true);
            $chiste = $array2["value"];
            ?>
            <div class = "container col-7" style ="background-color: #2DE094">
                <p><?php echo $chiste ?></p>
            </div>
            <?php
         }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>