<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora a precio con IVA</title>
    <?php require 'Funciones/IVA.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <form method ="post" action = "">
        <label for = "precioNeto">Precio sin IVA</label>
        <br>
        <input name = "precioNeto"  type="number" step = "0.1" class = "form-control">
        <br><br>
        <label for = "tipoIVA">Tipo IVA</label>
        <br>
        <select name ="tipoIVA" class = "form-control">
            <option value = "GENERAL">General</option>
            <option value = "REDUCIDO">Reducido</option>
            <option value = "SUPERREDUCIDO">Superreducido</option>
            <option value = "SINIVA">Sin IVA</option>
        </select>
        <br><br>
        <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
    </form> 
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $precioNeto = (float) $_POST["precioNeto"];
            $tipoIVA = $_POST["tipoIVA"];
            $salida = precioConIVA($precioNeto, $tipoIVA);
            echo "<h4>El precio con IVA es: $salida</h4>";
        }
    ?>
</body>
</html>