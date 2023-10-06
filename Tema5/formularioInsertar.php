<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <?php require 'Funciones/arrays.php' ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1>Insertar Producto</h1>
        <form action = "" method = "POST">
            <label for ="nombre">Nombre de producto: </label>
            <br>
            <input type="text" name = "nombre" class = "form-control">
            <br><br>
            <label for ="precio">Precio: </label>
            <br>
            <input type="number" step = "1" name = "precio" class = "form-control">
            <br><br>
            <label for ="cantidad">Cantidad: </label>
            <br>
            <input type="number" step ="0.01" name = "cantidad" class = "form-control">
            <br><br>
            <input type="submit" value ="Insertar">
        </form>
    </div>
    <div>
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

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>