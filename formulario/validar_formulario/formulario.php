<?php

    $errores = '';
    $alerta = '';
    if(isset($_POST['submit'])){//Si está enviado el formulario
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        if(!empty($nombre)){
            //Seteamos el texto para poder ingresarlo bien en la bd
            // $nombre = trim($nombre);//Elimina espacios
            // $nombre = htmlspecialchars($nombre);//Cambiar caracteres especiales
            // $nombre = stripcslashes($nombre);
            $nombre =filter_var($nombre,FILTER_SANITIZE_STRING);
            echo "Tu nombre es: $nombre <br>";
        }else{
            
            $errores .= 'Por favor agrega un nombre <br>';
        }
        if(!empty($correo)){
            $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                $errores .= "Ingrese un correo válido <br>";
            }
            echo "Tu correo es: $correo <br>";
            
        }else{
            $errores.= 'Por favor agrega un correo <br>';
        }
        

    
       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
            margin-left:5px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="email" name="correo" placeholder="Correo">
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores ?></div>
        <?php endif;?>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>