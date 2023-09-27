<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Arrays (DOC)</title>
    <link rel="stylesheet" href="../Tema2/CSS/estilos.css">
</head>
<body>
    <?php
        $productos = [
            ["Polk Audio signas2 Universal TV de Sistema de Barra de Sonido con subwoofer inalámbrico Negro", "111.24"],
            ["El programador pragmático. Edición especial: Viaje a la maestría (TÍTULOS ESPECIALES)", "37.95"],
            ["Tapo C520WS - Cámara Vigilancia Wi-Fi Exterior 360°, Resolución 2K QHD, Visión Nocturna en Color Starlight, Detección IA Múltiple, Seguimiento de Movimiento, IP66", "69.99"],
            ["Clean JavaScript: Aprende a aplicar Código Limpio, SOLID y Testing", "29.99"],
            ["Código Limpio: Manual de estilo para el desarrollo ágil de software (PROGRAMACIÓN)", "49.87"]
        ];
        $titulo = array_column($productos, 0);
        array_multisort($titulo, SORT_ASC, $productos);
        $precioTotal = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($productos as $producto){
                    list($nombre, $precio) = $producto;
                    echo "<tr><td>$nombre</td><td>$precio</td></tr>";
                    $precioTotal += $precio;
                }
            ?>
        </tbody>
    </table>
    <p>El precio total es: <?php echo "$precioTotal"; ?> y hay un total de <?php echo count($productos); ?></p>
</body>
</html>