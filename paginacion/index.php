
<?php 
    try{
        $conexion= new PDO('mysql:host=localhost;db_name=udecfire','root','');

    }catch(PDOException $e){
        echo "Error ".$e->getMessage();
        die();
    }

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']:1;
    $postPorPagina = 5;
    $inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina) - $postPorPagina : 0;

    $articulos = $conexion -> prepare("select * from brigadista");

    $articulos -> execute();

    $articulos = $articulos -> fetchAll();
    

    print_r($articulos);

    include("index.view.php");

?>