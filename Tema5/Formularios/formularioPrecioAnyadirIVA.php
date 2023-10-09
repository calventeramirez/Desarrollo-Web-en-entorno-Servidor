<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora a precio con IVA</title>
    <?php require 'Funciones/IVA.php' ?>
    <?php require 'Funciones/irpf.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Formulario IVA</h1>
        <form method ="post" action = "">
            <label for = "precioNeto">Precio sin IVA</label>
            <br>
            <input name = "precioNeto"  type="number" step = "0.1" class = "form-control">
            <br><br>
            <label for = "tipoIVA">Tipo IVA</label>
            <br>
            <select name ="tipoIVA" class = "custom-select">
                <option value = "GENERAL">General</option>
                <option value = "REDUCIDO">Reducido</option>
                <option value = "SUPERREDUCIDO">Superreducido</option>
                <option value = "SINIVA">Sin IVA</option>
            </select>
            <input type = "hidden" name ="action" value ="iva">
            <br><br>
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_POST["action"] == "iva"){
                    $precioNeto = (float) $_POST["precioNeto"];
                    $tipoIVA = $_POST["tipoIVA"];
                    $salida = precioConIVA($precioNeto, $tipoIVA);
                    echo "<h4>El precio con IVA es: $salida</h4>";
                }
            }
        ?>
        </form>  
        <br><br>
        <h1>Formulario IRPF</h1>
        <form method ="post" action = "">
            <label for = "salario">Salario</label>
            <br>
            <input name = "salario"  type="number" step = "1000" class = "form-control">
            <br><br>
            <input type = "hidden" name ="action" value ="irpf">
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if($_POST["action"] == "irpf"){
                        $salario = (float) $_POST["salario"];
                        $salarioFinal = salarioSinIRPF($salario);
                        echo "<h4>El salario descontando el irpf es: $salarioFinal</h4>";
                    }
                }
            ?>
        </form>    
    </div>

</body>
</html>