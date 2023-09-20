<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <?php
    echo "Hola mundo";
    //Ahora ponemos el navegador la ruta http://localhost/ejercicios/
    //Y seleccionamos el archivo hola_mundo.php y se debe ver el mensaje

    //Si metemos las etiquetas <h1></h1> dentro del literal
    //Ejemplo:
    echo "<h1>Hola mundo</h1>";
    //Este mensaje NO se ve literal, se interpreta
    ?>

    <?php
    //Comentarios igual que java
    echo "<h3>Otro trocito</h3>";
    //Declaracion de variables
    $entero = 1; #int
    $decimal = 1.5; #float
    $exponente = 3e5; #Esto es tres por diez elevado a 5

    echo $exponente;
    echo  "<br><br>";
    //Esto nos da informacion de la variable
    var_dump($exponente);//Tipo de la funcion y dato en pantalla

    echo  "<br><br>";

    //No son iguales los dos string
    $string1 = "Hola";
    echo "Texto: $string1";
    echo  "<br>";
    $string2 = 'Hola';
    echo 'Texto: $string2'; //No concatena como las ""
    echo  "<br>";
    echo $string1 ." ". $string2;
    echo  "<br>";
    echo "<h1>$string1</h1>"; //Manera facil de concatenar
    echo "<h1>".$string1."</h1>"; //Notacion punto de concatenación
    echo  "<br><br>";
    
    //Array
    $array1 = [1,2,3];
    $array2 = ["a", "b", "c"];
    //Fuertemente tipado por lo tanto no mezclamos tipos de datos
    var_dump($array1);
    echo  "<br>";
    var_dump($array2);
    echo  "<br><br>";

    //Booleanos
    $b = true;
    $c = false;
    
    var_dump($b);
    echo  "<br><br>";

    //Constantes
    define("EDAD", 25);
    echo EDAD;

    ?>
</body>
</html>