<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../Funciones/base_de_datos.php' ?>
    <?php require 'usuario.php' ?>
</head>
<body>
    <div class = "container">
        <h1>Listado de Usuarios</h1>
        <div>
            <?php
                 $sql = "SELECT * FROM usuarios";
                 $resultado = $conexion -> query($sql);
                 $usuarios = [];
                 while($fila = $resultado ->fetch_assoc()){
                     $nuevo_usuario = new Usuario($fila["usuario"], $fila["nombre"], $fila["apellidos"], $fila["fecha_nacimiento"]);
                     array_push($usuarios, $nuevo_usuario);
                 }
            ?>
            <table class="table table-hover table-striped table-responsive">
                 <thead class = "table table-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>
                 </thead>
                 <tbody>
                 <?php
                        foreach ($usuarios as $usuario) {
                            echo "<tr>";
                            echo "<td>" . $usuario->usuario . "</td>";
                            echo "<td>" . $usuario->nombre . "</td>";
                            echo "<td>" . $usuario->apellidos . "</td>";
                            echo "<td>" . $usuario->fecha_nacimiento . "</td>";
                            echo "</tr>";
                        }
                    ?>
                 </tbody>
            </table>
        </div>
    </div>
</body>
</html>