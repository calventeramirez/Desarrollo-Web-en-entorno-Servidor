<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Persona</title>
    <link rel = "stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $personas = [
            "12345678G" => "Garcia",
            "34245523H" => "Conchi",
            "96534465J" => "Paco Porras"
        ];
    ?>
    <ul>
        <?php
            foreach($personas as $persona){
                echo "<li>$persona</li>";
            }
        ?>
    </ul>
    <!-- Version con las claves-->
    <ul>
        <?php
            foreach($personas as $dni => $persona){
                echo "<li>DNI: $dni, Nombre: $persona</li>";
            }
        ?>
    </ul>
    <!-- Version en una tabla-->
    <h1>Tabla inicial</h1>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
            <?php
                foreach($personas as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
    <!--Tabla ordenada con sort-->
    <h1>Tabla con SORT</h1>
    <?php
        $personasSort = $personas;
        sort($personasSort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasSort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
    <!--Tabla Ordenada con rsort-->
    <h1>Tabla con RSORT</h1>
    <?php
        $personasRsort = $personas;
        rsort($personasRsort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasRsort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
    <!--Tabla Ordenada con asort-->
    <h1>Tabla con ASORT</h1>
    <?php
        $personasAsort = $personas;
        asort($personasAsort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasAsort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
    <!--Tabla Ordenada con arsort-->
    <h1>Tabla con ARSORT</h1>
    <?php
        $personasArsort = $personas;
        arsort($personasArsort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasArsort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    <br><br>
    <!--Tabla ordenada con ksort -->
    <h1>Tabla con KSORT</h1>
    <?php
        $personasKsort = $personas;
        ksort($personasKsort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasKsort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
    <!--Tabla ordenada con krsort -->
    <h1>Tabla con KRSORT</h1>
    <?php
        $personasKrsort = $personas;
        krsort($personasArsort);
    ?>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tboby>
        <?php
                foreach($personasKrsort as $dni => $persona){
                    echo "<tr><td>$dni</td><td>$persona</td></tr>";
                }
            ?>
        </tboby>
    </table>
    <br><br>
</body>
</html>