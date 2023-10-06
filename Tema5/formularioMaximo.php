<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Maximo</title>
    <?php require 'Funciones/maximo.php'; ?>
</head>
<body>
    <form method ="post" action = "">
        <label for = "Numero1">Numero 1</label>
        <br>
        <input name = "Numero1"  type="number" step = "1">
        <br><br>
        <label for = "Numero2">Numero 2</label>
        <br>
        <input name = "Numero2"  type="number" step = "1">
        <br><br>
        <label for = "Numero3">Numero 3</label>
        <br>
        <input name = "Numero3"  type="number" step = "1">
        <br><br>
        <input type="submit" value ="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = (float) $_POST["Numero1"];
            $num2 = (float) $_POST["Numero2"];
            $num3 = (float) $_POST["Numero3"];
            $salida = maximo($num1, $num2, $num3);
            
            echo "<h4>$salida</h4>";
        }
    ?>
</body>
</html>