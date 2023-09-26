<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 2</title>
</head>
<body>
    <?php
        $array1 = array (
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        );
        $array2 = array('value1', 'value2', 'value3');
        print_r($array1);
        print("<br><br>");
        print_r($array2);
        print("<br><br>");
        //Crear el array con dni como clave y como valor el nombre
        $arrayPersonas = array(
            "53899807H" => "Pablo Calvente",
            "58602514J" => "Pepe Gonzalez",
            "58605854L" => "Manolo Gonzalez",
            "78612508V" => "Mario Perez",
        );
        print_r($arrayPersonas);
        print("<br><br>");

        $peliculas =["El señor de los anillos: La comunidad del anillo", "El señor de los anillos: Las dos torres", "El señor de los anilos: El retorno del rey"];
        //Poco correcto para sacar de listas
        for($i = 0; $i < count($peliculas); $i++){
            echo $peliculas[$i]."<br>";
        }
        //Muy correcto
        foreach($peliculas as $pelicula){
            echo $pelicula."<br>";
        }
        //Muy correcto
        foreach($peliculas as $cont => $pelicula){
            echo $cont.", ". $pelicula."<br>";
        }
        //Poco correcto
        $i = 0;
        while($i < count($peliculas)){
            echo $peliculas[$i]."<br>";
            $i++;
        }
        echo "<br><br>";
        //Ejercicio:Sacar el nombre de la lista arrayPersonay en una lista, y luego en otra lista key y valor
        echo "<ul>";
        foreach($arrayPersonas as $nombre){
            echo "<li>".$nombre."</li><br>";
        }
        echo "</ul>";
        echo "<br><br>";
        echo "<ul>";
        foreach($arrayPersonas as $dni => $nombre){
            echo "<li>".$dni." => ".$nombre."</li>";
        }
        echo "</ul>";

        //Array multidimensional
        $usuarios = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Figther", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castlevania", "Nintendo 64", 55]
        ];

        //Funcion list, nos permite asignar variables a los distintos valores del array

        $usuarios2 = array(
            array("Ned", "Stark"),
            array("Daenerys", "Targaryen"),
            array("Tyrion", "Lannister"),
            array("Arya", "Stark");
        );

        //para ordenar usar array_multisort(Primer campo, SORT_ASC/SORT_DESC, Segundo campo, SORT_ASC/SORT_DESC, Array)
    ?>
</body>
</html>