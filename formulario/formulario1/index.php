<?php
    if($_POST){
        echo $_POST['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
</head>
<body>
    <div class="main-container">
        <h1>Formulario de contacto</h1>
        <!-- <?php //echo $_SERVER['PHP_SELF'] ?> Encuentra la misma ruta-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
            <input autocomplete = "off" type="text" placeholder="Nombre:" name="nombre">
            <br>
            <label for="hombre">Hombre</label>
            <input type="radio" name="sexo" id="hombre" value="hombre">
            
            <label for="mujer">Mujer</label>
            <input type="radio" name="sexo" id="mujer" value="mujer">
            <br>

            <select name="year" id="year">
                <?php 
                for($i=1950;$i<=2021;$i++){
                    echo "<option value = $i>$i</option>";
                }  
                ?>
            </select>
            <br>
            
            <label for="terminos">Aceptas los terminos</label>
            <input type="checkbox" name="terminos" id="terminos" value="true">

            <input type="submit" value ="Enviar">


        </form>
    </div>
</body>
</html>