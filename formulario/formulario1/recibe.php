<?php


//Obtenemos los datos desde el html, Metodo Post
if($_POST){
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];


    echo "Datos personales"."<br>";
    echo "<li>".$nombre."</li>";
    echo "<li>".$sexo."</li>";
    echo "<li>".$year."</li>";
    echo "<li>".$terminos."</li>";
}else{
    header('Location: http://www.google.cl'); //Se redirige a otra pagina
}




?>