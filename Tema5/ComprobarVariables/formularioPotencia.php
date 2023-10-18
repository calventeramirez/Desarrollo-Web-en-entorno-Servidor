<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para la potencia</title>
    <?php require '../../Tema4/potencias.php'; ?>
    <!--Importamos el codigo de php de otro lado-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_base = depurar($_POST["base"]);
            $temp_exponente = depurar($_POST["exponente"]);
            if (strlen($temp_base) > 0) {
                //Se ha introducido la base
                //Comprobamos si se ha introducido un numero
                if (filter_var($temp_base, FILTER_VALIDATE_INT)) {
                    //El numero introducido es un numero
                    //Comprobamos si se ha introducimos un numero correcto
                    $temp_base = (int) $temp_base;
                    if ($temp_base >= 0) {
                        //exito
                        $base = $temp_base;
                    } else {
                        $err_base = "El numero debe ser igual o mayor que 0";
                    }
                } else {
                    //Se ha introducido pero no es un numero
                    $err_base = "No se ha introducido un numero";
                }
            } else {
                //No se ha introducido nada
                $err_base = "No se ha introducido la base";
            }
            //Para exponentes
            if (strlen($temp_exponente) > 0) {
                //Se ha introducido la exponente
                //Comprobamos si se ha introducido un numero
                if (filter_var($temp_exponente, FILTER_VALIDATE_INT)) {
                    //El numero introducido es un numero
                    //Comprobamos si se ha introducimos un numero correcto
                    $temp_exponente = (int) $temp_exponente;
                    if ($temp_exponente >= 0) {
                        //exito
                        $exponente = $temp_exponente;
                    } else {
                        $err_exponente = "El numero debe ser igual o mayor que 0";
                    }
                } else {
                    //Se ha introducido pero no es un numero
                    $err_exponente = "No se ha introducido un numero";
                }
            } else {
                //No se ha introducido nada
                $err_exponente = "No se ha introducido el exponente";
            }
        }
        function depurar($entrada) //Creada para evitar insercion de sql y espacios en blanco
        {
            $salida = htmlspecialchars($entrada);
            $salida = trim($salida);
            return $salida;
        }
        ?>
        <form action="" method="post">
            <label for="base" class="form-label">Base</label>
            <br>
            <input type="text" name="base" class="form-control" />
            <?php if (isset($err_base)) echo $err_base; ?>
            <label for="exponente" class="form-label">Exponente</label>
            <input type="text" name="exponente" class="form-control" />
            <?php if (isset($err_exponente)) echo $err_exponente; ?>
            <?php
            if (isset($base) && isset($exponente)) {
                echo "El resultado es " . potencia($base, $exponente);
            }
            ?>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary btn-sm">
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>