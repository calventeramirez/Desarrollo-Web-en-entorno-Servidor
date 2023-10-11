<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2 - Formularios y Funciones</title>
    <?php require 'practica2Funciones.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <h1>Práctica 2 - Formularios y Funciones</h1>
    <div class="container">
        <h3>Ejercicio 1</h3>
        <form method="post" action="">
            <label for="dinero" class="form-label">Dinero: </label>
            <input name="dinero"  type="number" step="0.01" class="form-control">
            <div class = "contianer text-center">
                <div class = "row">
                    <div class = "col">
                        <label for="monedaEntrada" class="form-label">Moneda de entrada</label>
                        <br>
                        <input type="radio" class = "form-check-input" name="monedaEntrada" value="euro">
                        <label for="monedaEntrada" class="form-label">€</label>
                        <br>
                        <input type="radio" class = "form-check-input" name="monedaEntrada" value="dolar">
                        <label for="monedaEntrada" class="form-label">$</label>
                        <br>
                        <input type="radio" class = "form-check-input" name="monedaEntrada" value="yen">
                        <label for="monedaEntrada" class="form-label">¥</label>
                        <br>
                    </div>
                    <div class = "col">
                        <label for="monedaSalida" class="form-label">Moneda de Salida</label>
                        <br>
                        <input type="radio" class = "form-check-input" name="monedaSalida" value="euro">
                        <label for="monedaSalida" class="form-label">€</label>
                        <br>
                        <input type="radio" name="monedaSalida" class = "form-check-input" value="dolar">
                        <label for="monedaSalida" class="form-label">$</label>
                        <br>
                        <input type="radio" name="monedaSalida" class = "form-check-input" value="yen">
                        <label for="monedaSalida" class="form-label">¥</label>
                    </div>
                </div>
            </div>
            <br>
            <input type="hidden" name="action" value="cambio">
            <input type="submit" value="Cambiar" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "cambio") {
                    $dinero = (float) $_POST["dinero"];
                    $cambioEntrada = $_POST["monedaEntrada"];
                    $cambioSalida = $_POST["monedaSalida"];
                    if($dinero >= 0){
                        $salida = cambiarDivisa($dinero, $cambioEntrada, $cambioSalida);
                        if ($salida == -1) {
                            echo "<h4>El cambio de $dinero es: $dinero</h4>";
                        } else {
                            echo "<h4>El cambio de $dinero es: $salida</h4>";
                        }
                    }else{
                        echo "<h4>Error. El dinero no puede ser negativo</h4>";
                    }
                }
            }
            ?>
        </form>
        <br><br>
        <h3>Ejercicio 2</h3>
        <form method="post" action="">
            <label for="numero" class = "form-label">Numero: </label>
            <input name="numero" type="number" step="1" class="form-control">
            <label for="operacion" class = "form-label">Tipo de Operación</label>
            <select name="operacion" class="custom-select">
                <option value="sumatorio">Sumatorio</option>
                <option value="factioral">Factorial</option>
            </select>
            <input type="hidden" name="action" value="operacionesMatematicas">
            <br><br>
            <input type="submit" value="Calcular" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "operacionesMatematicas") {
                    $numero = (int) $_POST["numero"];
                    $op = $_POST["operacion"];
                    if($op == "sumatorio"){
                        $salida = sumatorio($numero);
                        if($salida == -1){
                            echo "Error. Introduzca un numero positivo";
                        }else{
                            echo "<h4>El sumatorio de $numero es $salida</h4>";
                        }
                    }else{
                        $salida = factorial($numero); 
                        if($salida == -1){
                            echo "Error. Introduzca un numero positivo";
                        }else{
                            echo "<h4>El factorial de $numero es $salida</h4>";
                        }
                    }
                }
            }
            ?>
        </form>
        <br><br>
        <h3>Ejercicio 3</h3>
        <?php
            $animales = [
                ["Lobo ibérico", "Mamífero", 2500],
                ["Lince ibérico", "Mamífero", 1668],
                ["Quebrantahuesos", "Ave", 2000],
                ["Oso pardo", "Mamífero", 500]
            ]
        ?>
        <h4>Buscar especie</h4>
        <form action="" method = "POST">
            <label for = "especies" class = "form-label">Especie: </label>
            <input name ="especies" type = "text" class="form-control">
            <input type="hidden" name="action" value="comprobarEspecimen">
            <br>
            <input type="submit" value="Comprobar" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "comprobarEspecimen") {
                    $especimen = $_POST["especies"];

                    $salida = comprobarEspecimen($especimen, $animales);
                    
                    if($salida === "No existe el especimen en la tabla"){
                        echo "<h5>$salida</h5>";
                    }else{
                        echo "<h5>El $especimen está $salida</h5>";
                    }
                }
            }
            ?>
        </form>
        <h4>Lista de especies</h4>
        <table class = "table table-bordered">
            <thead>
                <tr>
                    <th>Especie</th>
                    <th>Clase</th>
                    <th>Ejemplares</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($animales as $animal){
                        list($nombre, $clase, $ejemplares) = $animal;
                        $estado = comprobarEstado($ejemplares);
                        echo "<tr><td>$nombre</td><td>$clase</td><td>$ejemplares</td><td>$estado</td></tr>";
                    }
                ?>
            </tbody>
        </table>
        <br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>