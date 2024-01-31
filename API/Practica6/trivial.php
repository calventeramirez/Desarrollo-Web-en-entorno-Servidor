<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Trivial</title>
</head>
<body>
    <form method ="POST" action ="">
        Cantidad Preguntas: <input type ="text" name = "cantidad">
        <br><br>
        Categoria: <select name ="categoria">
            <option selected value = "23">Historia</option>
            <option value = "22">Geografia</option>
            <option value = "27">Animales</option>
            <option value = "15">Videojuegos</option>
        </select>
        <br><br>
        Dificultad: <select name="dificultad">
            <option selected value ="easy">Facil</option>
            <option value = "medium">Normal</option>
            <option value = "hard">Dificil</option>
        </select>
        <br><br>
        <input type = "submit" value="Buscar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $cantidad = $_POST["cantidad"];
            $categoria = $_POST["categoria"];
            $dificultad = $_POST["dificultad"];
            $amount = "amount=$cantidad";
            $category = "category=$categoria";
            $difficulty = "difficulty=$dificultad";

            $apiURL = "https://opentdb.com/api.php?$amount&$category&$difficulty";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $apiURL);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $respuesta = curl_exec($curl);
            $array = json_decode($respuesta, true);
            $preguntas = $array["results"];

            foreach($preguntas as $pregunta){
                $titulo = $pregunta["question"];
                $cat = $pregunta["category"];
                $dif = $pregunta["difficulty"];
                $corr = $pregunta["correct_answer"];
                $incorrectas = $pregunta["incorrect_answers"];
                ?>
                <h1>Pregunta: <?php echo $titulo ?></h1>
                <p>Categoria: <?php echo $cat ?></p>
                <p>Dificultad: <?php echo $dif ?></p>
                <p style ="background-color: green">Correcta: <?php echo $corr ?></p>
                <?php
                foreach($incorrectas as $incorrecta){
                ?>
                    <p style="background-color: red">Incorrecta: <?php echo $incorrecta ?></p>
                <?php
                }
            }
        }

    ?>
</body>
</html>