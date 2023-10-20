<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora a precio con IVA</title>
    <?php require '../Funciones/IVA.php' ?>
    <?php require '../Funciones/irpf.php' ?>
    <?php require '../Funciones/depurar.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["action"] == "iva"){
                $temp_precioNeto = depurar($_POST["precioNeto"]);
                if(isset($_POST["tipoIVA"])){
                    $temp_tipoIVA = depurar($_POST["tipoIVA"]);
                }else{
                    $temp_tipoIVA = "";
                }
                //Validación del precio
                if(!strlen($temp_precioNeto) > 0){
                    $err_precioNeto = "No se ha introducido el precio en neto";
                }else{
                   if((filter_var($temp_precioNeto, FILTER_VALIDATE_FLOAT)===FALSE)){
                        $err_precioNeto = "El precio debe ser un número";
                   }else{
                        $temp_precioNeto = (float) $temp_precioNeto;
                        if($temp_precioNeto < 0){
                            $err_precioNeto = "El precio debe ser mayor o iguasl que cero";
                        }else{
                            $precioNeto = $temp_precioNeto;
                        }
                   }
                }
                //Validación del IVA
                if(!strlen($temp_tipoIVA) > 0){
                    $err_iva = "El IVA es obligatorio";
                }else{
                    $valores_validos_IVA = ["GENERAL", "REDUCIDO", "SUPERREDUCIDO", "SINIVA"];
                    if(!in_array($temp_tipoIVA, $valores_validos_IVA)){
                        $err_iva = "El IVA no es correcto";
                    }else{
                        $tipoIVA = $temp_tipoIVA;
                    }
                }
            }
        }
     ?>
    <div class="container">
        <h1>Formulario IVA</h1>
        <form method ="post" action = "">
            <label for = "precioNeto" class = "form-label">Precio sin IVA</label>
            <br>
            <input name = "precioNeto"  type="number" step = "0.1" class = "form-control" >
            <?php if(isset($err_precioNeto)){echo $err_precioNeto;}?>
            <br>
            <label for = "tipoIVA" class = "form-label">Tipo IVA</label>
            <br>
            <select name ="tipoIVA" class = "custom-select">
                <option disabled selected hidden>Seleccione una opcion</option>
                <option value = "GENERAL">General</option>
                <option value = "REDUCIDO">Reducido</option>
                <option value = "SUPERREDUCIDO">Superreducido</option>
                <option value = "SINIVA">Sin IVA</option>
            </select>
            <br>
            <?php if(isset($err_iva)){echo $err_iva;}?>
            <input type = "hidden" name ="action" value ="iva">
            <br><br>
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <br>
            <?php
                if(isset($precioNeto) && isset($tipoIVA)){
                    echo "El precio con IVA es: ". precioConIVA($precioNeto, $tipoIVA);
                }
            ?>
        </form>  
        <br><br>
        <?php
             if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_POST["action"] == "irpf"){
                    $temp_salario = depurar($_POST["salario"]);
                    if(!strlen($temp_salario) > 0){
                        $err_salario = "Error debes meter un numero";
                    }else{
                        if((filter_var($temp_salario, FILTER_VALIDATE_FLOAT) === FALSE)){
                            $err_salario = "Error el precio debe ser numerico";
                        }else{
                            $temp_salario = (float) $temp_salario;
                            if($temp_salario < 0){
                                $err_salario = "Error el salario debe ser positivo";
                            }else{
                                $salario = $temp_salario;
                            }
                        }
                    }
                }
            }
        ?>
        <h1>Formulario IRPF</h1>
        <form method ="post" action = "">
            <label for = "salario">Salario</label>
            <br>
            <input name = "salario"  type="number" step = "1000" class = "form-control">
            <br>
            <?php if(isset($err_salario)){echo $err_salario;}?>
            <br>
            <input type = "hidden" name ="action" value ="irpf">
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <?php
                if(isset($salario)){
                    echo "El salario descotando el IRPF es: ". salarioSinIRPF($salario);
                }
            ?>
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>