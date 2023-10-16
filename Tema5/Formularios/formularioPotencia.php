<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para la potencia</title>
    <?php require '../../Tema4/potencias.php'; ?> <!--Importamos el codigo de php de otro lado-->
</head>
<body>
    <form action="" method="post">
        <label for ="base">Base</label>
        <br>
        <input type="text" name = "base" />
        <br><br>
        <label for ="exponente">Exponente</label>
        <br>
        <input type="text" name = "exponente" />
        <br><br>
        <input type="submit" value ="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $base = (int) $_POST["base"];
            $exponente = (int) $_POST["exponente"];
            $salida = potencia($base, $exponente);
            echo "<h4>La potencia de $base elevado a $exponente es $salida</h4>";
        }
    ?>
</body>
</html>