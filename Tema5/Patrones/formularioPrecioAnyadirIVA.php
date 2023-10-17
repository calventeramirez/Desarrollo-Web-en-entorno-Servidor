<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora a precio con IVA</title>
    <?php require '../Funciones/IVA.php' ?>
    <?php require '../Funciones/irpf.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        function depurar($entrada) //Creada para evitar insercion de sql y espacios en blanco
        {
            $salida = htmlspecialchars($entrada);
            $salida = trim($salida);
            return $salida;
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["action"] == "iva"){
                $temp_precioNeto = depurar($_POST["precioNeto"]);
                $temp_tipoIVA = depurar($_POST["tipoIVA"]);
                if(strlen($temp_precioNeto) > 0){
                    if(is_numeric($temp_precioNeto)){
                        $temp_precioNeto = (int)$temp_precioNeto;
                        if($temp_precioNeto >= 0){
                            $precioNeto = $temp_precioNeto;
                        }else{
                            $err_precioNeto = "El numero debe ser mayor o igual a 0";
                        }
                    }else{
                        $err_precioNeto = "Introduzca un valor numerico";
                    }
                }else{
                    $err_precioNeto = "No se ha introducido el precio en neto";
                }
            }
        }
     ?>
    <div class="container">
        <h1>Formulario IVA</h1>
        <form method ="post" action = "">
            <label for = "precioNeto">Precio sin IVA</label>
            <br>
            <input name = "precioNeto"  type="number" step = "0.1" class = "form-control" >
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
            <br>
            <?php
                if(isset($precioNeto)&&isset($tipoIVA)){
                    echo "El precio con IVA es: ". precioConIVA($precioNeto, $tipoIVA);
                }else{
                    if(isset($err_precioNeto)){
                        echo $err_precioNeto;
                    }
                }
            ?>
        </form>  
        <br><br>
        <?php
             if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($_POST["action"] == "irpf"){
                    /*$salario = (float) $_POST["salario"];
                    $salarioFinal = salarioSinIRPF($salario);
                    echo "<h4>El salario descontando el irpf es: $salarioFinal</h4>";*/
                    $temp_salirio = depurar($_POST["salario"]);
                    if(strlen($temp_salirio) > 0){
                        if(is_numeric($temp_salirio)){
                            $temp_salirio = (int)$temp_salirio;
                            if($temp_salirio >= 0){
                                $salario = $temp_salirio;
                            }else{
                                $err_salario = "Error no es un numero mayor que 0";
                            }
                        }else{
                            $err_salario = "Error no es un numero";
                        }
                    }else{
                        $err_salario = "Error debes meter un numero";
                    }
                }
            }
        ?>
        <h1>Formulario IRPF</h1>
        <form method ="post" action = "">
            <label for = "salario">Salario</label>
            <br>
            <input name = "salario"  type="number" step = "1000" class = "form-control">
            <br><br>
            <input type = "hidden" name ="action" value ="irpf">
            <input type="submit" value ="Calcular" class="btn btn-primary btn-sm">
            <?php
                if(isset($salario)){
                    echo "El salidrio descotando el IRPF es: ". salarioSinIRPF($salario);
                }else{
                    echo $err_salario;
                }
            ?>
        </form>    
    </div>

</body>
</html>