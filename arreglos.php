<?php
    //Forma antigua
    $semana = array('Lunes',"Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
    echo "Largo del array". count($semana);
    //Forma nueva
    $array = ['Lunes',"Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];

    //ForEach
    $array_numeros = [5,2,1,9,5];
    sort($array_numeros); //Ordena los arrays
    echo "<br>"."Imprimiendo array ordenado";

    foreach($array_numeros as $numero){
        echo "<li>".$numero."</li>";
    }
    echo "Dias de la semana"."<br>";
    foreach($semana as $dia){
        echo "<li>".$dia."</li>";
    }
    
    echo gettype($array);//Tipo de dato 
    // count(array) => devulve la cantidad de elementos del arreglo

    $arrayAsociativo = array('nombre' => "Felipe","apellido" => "Opazo","edad"=>21);
    echo "<br>".$arrayAsociativo['nombre'];//Parecido a un objeto

    /*
    for ($i=0; $i< count($semana);$i++){
        echo "<li>".$semana[i]."</li>";
    }
    */
?>