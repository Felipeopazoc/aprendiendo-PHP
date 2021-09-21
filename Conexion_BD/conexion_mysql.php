<?php

try{

    //Creamos nuestros datos para ingresar a la base de datos
    $host = "localhost";
    $dbname= "udecfire";
    $username= "root";
    $password = "";
    //Instanciamos la base de datos;
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

    echo "Conexión satisfactoria"."<br>";

    traer_nombres($conn);

}catch(PDOException $e){
    die("No se ha podido conectar la base de datos".$e->getMessage());
}

function traer_nombres($conn){
    $sql = "SELECT * FROM REGION WHERE NUMERO_REGION = 8 ORDER BY NUMERO_REGION ";

    foreach($conn -> query($sql) as $row){
        print("ID: ".$row[0]." Nombre: ".$row[1]."<br>"); //Imprimimos la primera columna
    }
}
?>