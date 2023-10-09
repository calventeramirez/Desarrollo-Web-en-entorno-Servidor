<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $productos = [
            ["Chuletas de cordero", 8, 6],
            ["Helados Kalise", 1.5, 7],
            ["Arroz", 2, 5]
        ];
    ?>
    <div class ="container">
        <h1>Insertar Producto</h1>
        <form action = "" method = "POST">
            <fieldset>
                <label for ="nombre">Nombre de producto: </label>
                <input type="text" name = "nombre" class = "form-control">
                <label for ="precio">Precio: </label>
                <input type="number" step = "0.01" name = "precio" class = "form-control">
                <label for ="cantidad">Cantidad: </label>
                <input type="number" step ="1" name = "cantidad" class = "form-control">
                <br>
                <input type="submit" value ="Insertar">
            </fieldset>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombre = $_POST["nombre"];
                $precio = (float)$_POST["precio"];
                $cantidad = (int)$_POST["cantidad"];
                $nuevoProducto = [$nombre, $precio, $cantidad];
                array_push($productos, $nuevoProducto);
            }
        ?>
    </div>
    <br><br>
    <div>
        <h1>Productos</h1>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($productos as $producto){
                        list($nombre, $precio, $cantidad) = $producto;
                        echo "<tr><td>$nombre</td><td>$precio</td><td>$cantidad</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>