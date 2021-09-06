<?php

    $amigo = array('telefono'=>982677284,"edad" =>21);

    extract($amigo); //Extrae los elementos de forma mas facil

    echo($edad);
    //Array_pop //elimina el ultimo de la lista

    //join(' - ', array)//Convierte el array a string

    $semana = array('Lunes',"Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
   
    echo  join(' - ',$semana);
    
?>