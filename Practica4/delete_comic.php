<?php
    require 'database_conection.php';
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $id = $_POST["id_comic"];
        $sql = $conexion -> prepare("DELETE FROM comics WHERE id_comic = ?");
        $sql -> bind_param("d", $id);
        $sql -> execute();
        header("Location: index.php");
    }
?>
