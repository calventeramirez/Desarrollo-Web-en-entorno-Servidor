<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muchos Formularios</title>
    <?php require '../Funciones/muchasFunciones.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>
    <div class="container">
        <h1>Formulario Temperatura</h1>
        <form method="post" action="">
            <label for="Temperatura">Temperatura: </label>
            <input name="Temperatura" type="number" step="0.1" class="form-control">
            <label for="primeraCambio">Tipo de temperatura</label>
            <select name="primerCambio" class="custom-select">
                <option value="C">Celsius</option>
                <option value="F">Farheint</option>
                <option value="K">Kelvin</option>
            </select>
            <label for="segundoCambio">Tipo de temperatura a cambiar</label>
            <select name="segundoCambio" class="custom-select">
                <option value="C">Celsius</option>
                <option value="F">Farheint</option>
                <option value="K">Kelvin</option>
            </select>
            <input type="hidden" name="action" value="temperatura">
            <br><br>
            <input type="submit" value="Calcular" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "temperatura") {
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
        <h1>Formulario Maximo 3</h1>
        <form method="post" action="">
            <label for="numero1">Numero 1: </label>
            <input name="numero1" type="number" step="1" class="form-control">
            <label for="numero2">Numero 2: </label>
            <input name="numero2" type="number" step="1" class="form-control">
            <label for="numero3">Numero 3: </label>
            <input name="numero3" type="number" step="1" class="form-control">
            <input type="hidden" name="action" value="maximo">
            <br><br>
            <input type="submit" value="Calcular" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "maximo") {
                    $numero1 = (int) $_POST["numero1"];
                    $numero2 = (int) $_POST["numero2"];
                    $numero3 = (int) $_POST["numero3"];
                    $salida = maximo($numero1, $numero2, $numero3);
                    echo "<h4>$salida</h4>";
                }
            }
            ?>
        </form>
        <br><br>
        <h1>Formulario Potencia</h1>
        <form method="post" action="">
            <label for="base">Base: </label>
            <input name="base" type="number" step="1" class="form-control">
            <label for="exponente">Exponente: </label>
            <input name="exponente" type="number" step="1" class="form-control">
            <input type="hidden" name="action" value="potencia">
            <br><br>
            <input type="submit" value="Calcular" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "potencia") {
                    $base = (int) $_POST["base"];
                    $exponente = (int) $_POST["exponente"];
                    $salida = potencia($base, $exponente);
                    echo "<h4>La potencia de $base con el exponente $exponente es $salida</h4>";
                }
            }
            ?>
        </form>
        <br><br>
        <h1>Formulario Primos</h1>
        <form method="post" action="">
            <label for="numero">Numero: </label>
            <input name="numero" type="number" step="1" class="form-control">
            <input type="hidden" name="action" value="primo">
            <br><br>
            <input type="submit" value="Calcular" class="btn btn-primary btn-sm">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "primo") {
                    $numero = (int) $_POST["numero"];
                    $salida = primoHasta($numero);
                    echo "<h4>Los numeros primos hasta el $numero son: ";
                    for($i = 0; $i < count($salida); $i++){
                        echo "$salida[$i] ";
                    }
                    echo "</h4>";
                }
            }
            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>