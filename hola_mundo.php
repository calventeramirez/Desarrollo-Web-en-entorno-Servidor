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
        echo  "<br><br>";
    ?>

    <?php
        $dia = date("d");
        if($dia <= 15){
            echo "Estamos a principios de mes";
        }else{
            echo "Estamos a final de mes";
        }
        echo  "<br>";

        $hora = date("H");
        if($hora < "12"){
            echo "Buenos dias";
        }else if($hora < "20"){//tambien se puede hacer usando elseif
            echo "Buenas tardes";
        }else{
            echo "Buenas noches";
        }
        echo  "<br>";

        $valor = rand(1, 150);
        if($valor < 10){
            echo "El numero $valor tiene un digito";
        }else if($valor < 100){
            echo "El numero $valor tiene dos digitos";
        }else{
            echo "El numero $valor tiene tres digitos";
        }
        echo  "<br>";

        $x = 5;
        $y = 10;
        if($x > $y):
            echo $x." es mayor que ".$y;
        elseif($x == $y):
            echo $x." igual ".$y;
        else:
            echo $x." no es ni mayor ni igual a ".$y;
        endif;
        echo  "<br>";

        $n = rand(1,3);
        switch($n){
            case 1:
                echo "$n es igual a 1";
                break;
            case 2:
                echo "$n es igual a 2";
                break;
            default:
                echo "$n es igual a 3";
                break;
        }
        echo  "<br>";

        $dia = date("l");
        $diaEspañol = "";
        if($dia == "Monday"){
            $diaEspañol = "Lunes";
        }elseif($dia == "Tuesday"){
            $diaEspañol = "Martes";
        }elseif($dia == "Wednesday"){
            $diaEspañol = "Miercoles";
        }elseif($diaEspañol == "Thrusday"){
            $diaEspañol = "Jueves";
        } elseif($diaEspañol == "Friday"){
            $diaEspañol = "Viernes";
        }elseif($diaEspañol == "Saturday"){
            $diaEspañol = "Sabado";
        }else{
            $diaEspañol = "Domingo";
        }

        switch($dia){
            case "Monday":
            case "Wednesday":
            case "Friday":
                echo "Hoy $diaEspañol hay clase de Desarrollo Web Servidor";
                break;
            default:
                echo "Hoy $diaEspañol no hay clase de Desarrollo Web Servidor";
        }
        echo  "<br><br>";
        //Estructura MATCH
        $d = date("l");
        $de = match ($d) {
             "Monday" => "Lunes",
             "Tuesday" => "Martes",
             "Wednesday" => "Miercoles",
             "Thursday" => "Jueves",
             "Friday" => "Viernes",
             "Saturday" => "Sabado",
             "Sunday" => "Domingo",
        };
        echo $de;
        echo  "<br><br>";
    ?>

    <?php
        $i = 1;
        while($i <= 10){
            echo $i;
            $i++;
        }
        echo  "<br>";

        $i = 1;
        do {
            echo $i."<br>";
            $i++;
        }while($i <= 10);
        echo  "<br><br>";

        for($i = 1; $i <= 10; $i++){
            echo $i;
        }
        echo  "<br>";

        for ($i=1;;$i++){
            if($i > 10){
                break;
            }
            echo $i;
        }
        echo  "<br>";
        //Divisible por 2 o 3
        for($i = 1; $i <= 50; $i++){
            if($i % 2 == 0 || $i % 3 == 0){
                echo $i;
            }
        }
        echo  "<br>";
        //Divisibles por 2 o 3 y no divisible por 6
        for($i = 1; $i <= 50; $i++){
            if(($i % 2 == 0 || $i % 3 == 0) && !($i % 6 == 0)){
                echo $i;
            }
        }
        echo  "<br>";

        //Sacar la suma de pares del 0 al 20
        
        $pares = 0;
        for($i = 1; $i < 21; $i++){
            if($i % 2 == 0){
                $pares += $i;
            }
        }
        echo "La suma de los numeros pares es: $pares";
        echo "<br><br>";
        //Sacar los numeros primos de 1 a 50
        echo "<ul>";
        for($i = 2; $i < 51; $i++){
            $primo = true; 
            $contador = 2;
            while($contador <= $i/2 && $primo){
                if($i % $contador == 0){
                    $primo = false;
                }
                $contador ++;
            }
            if($primo){
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
        echo "<br><br>";

        //Sacar los primeros 50 numeros primos
        $cont = 1;
        $i = 2;
        while($cont < 51){
            $primo = true;
            $contador = 2;
            while($contador <= $i/2 && $primo){
                if($i % $contador == 0){
                    $primo = false;
                }
                $contador ++;
            }
            if($primo){
                echo "$i ";
                $cont++;
            }
            $i++;
            
        }
    ?>
</body>
</html>