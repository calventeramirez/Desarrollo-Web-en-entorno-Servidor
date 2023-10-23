<?php
    $_servidor = "localhost"; //Para almacenar la ip de la base de datos
    $_usuario = "root";
    $_contraseña = "medac";
    $_base_de_datos = "db_usuarios";

    $conexion = new mysqli($_servidor, $_usuario, $_contraseña, $_base_de_datos)
        or die("Error de conexión");
?>

<!--Este archivo no deberia subirse al GitHub ya que seria una ruptura de seguridad-->