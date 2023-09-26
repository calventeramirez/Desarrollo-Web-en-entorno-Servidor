<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Figther", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castlevania", "Nintendo 64", 55]
        ];
        echo "<ul>";
        foreach($juegos as $juego){
            list ($nombre, $consola, $precio) = $juego;
            echo "<li>$nombre, $consola, $precio</li>";
        }
        echo "</ul>";
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($juegos as $juego){
                    list ($nombre, $consola, $precio) = $juego;
                    echo "<tr><td>$nombre</td><td>$consola</td><td>$precio</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <?php
           $juegosOrden = $juegos;
           $nombre = array_column($juegos, 0);
           $consola = array_column($juegos, 1);
           $precio = array_column($juegos, 2);
           array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $juegosOrden);
    ?>
        <!--Ordenado por consola y nombre-->
        <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($juegosOrden as $juego){
                    list ($nombre, $consola, $precio) = $juego;
                    echo "<tr><td>$nombre</td><td>$consola</td><td>$precio</td></tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <!--Ordenamos por consola, nombre y precio-->
    <?php
            $nombre = array_column($juegos, 0);
            $consola = array_column($juegos, 1);
            $precio = array_column($juegos, 2);
            array_multisort($consola, SORT_ASC, $nombre, SORT_ASC ,$precio, SORT_ASC, $juegos);
        ?>
        <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($juegos as $juego){
                    list ($nombre, $consola, $precio) = $juego;
                    echo "<tr><td>$nombre</td><td>$consola</td><td>$precio</td></tr>";
                }
            ?>
        </tbody>
    </table>

    <!--Añadimos una nueva columna con la variable stock-->
    <?php
        for($i = 0; $i < count($juegos); $i++){
            $juegos[$i][3] = rand(1, 20);
        }
    ?>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($juegos as $juego){
                    list ($nombre, $consola, $precio, $stock) = $juego;
                    echo "<tr><td>$nombre</td><td>$consola</td><td>$precio</td><td>$stock</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>