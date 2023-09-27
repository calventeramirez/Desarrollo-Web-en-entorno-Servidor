<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Arrays</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php
        $paises = array( "Italy"=>"Rome", "Luxembourg" =>"Luxembourg" , "Belgium"=>
        "Brussels" , "Denmark"=>"Copenhagen" , "Finland"=>"Helsinki" , "France" =>
        "Paris", "Slovakia" =>"Bratislava" , "Slovenia" =>"Ljubljana" , "Germany" =>
        "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands" =>"Amsterdam" , "Portugal" =>"Lisbon", "Spain"=>"Madrid",
        "Sweden"=>"Stockholm" , "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
        "Lithuania" =>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
        "Hungary"=>"Budapest" , "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
        "Vienna", "Poland"=>"Warsaw") ;  
        ksort($paises);
    ?>
    <table>
        <thead>
            <tr>
                <td>País</td>
                <td>Capital</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($paises as $pais => $capital){
                    echo "<tr><td>$pais</td><td>$capital</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>