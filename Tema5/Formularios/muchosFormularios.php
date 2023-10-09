<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muchos Formularios</title>
    <?php require '../Funciones/muchasFunciones.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <div class = "container">
    <h1>Formulario Temperatura</h1>
        <form method ="post" action = "">
            <label for = "Temperatura">Temperatura: </label>
            <input name = "Temperatura"  type="number" step = "0.1" class = "form-control">
            <label for = "primeraCambio">Tipo de temperatura</label>
            <select name ="primerCambio" class = "custom-select">
                <option value = "C">Celsius</option>
                <option value = "F">Farheint</option>
                <option value = "K">Kelvin</option>
            </select>
            <label for = "segundoCambio">Tipo de temperatura a cambiar</label>
            <select name ="segundoCambio" class = "custom-select">
                <option value = "C">Celsius</option>
                <option value = "F">Farheint</option>
                <option value = "K">Kelvin</option>
            </select>
            <input type = "hidden" name ="action" value ="temperatura">
            <br><br>
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if($_POST["action"] == "temperatura"){
                        $temperatura = (float) $_POST["Temperatura"];
                        $tipo1 = $_POST["primerCambio"];
                        $tipo2 = $_POST["segundoCambio"];
                        $salida = calculadoraTemp($temperatura, $tipo1, $tipo2);
                        echo "<h4>El cambio de $temperatura es: $salida</h4>";
                    }
                }
            ?>
        </form>  
        <br><br>
    </div>
</body>
</html>