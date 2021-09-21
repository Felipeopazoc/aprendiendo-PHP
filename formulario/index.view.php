
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo  ?>">
            <textarea class="form-control" name="mensaje" placeholder="Mensaje:" id="mensaje" ><?php if(!$enviado && isset($mensaje)) echo $mensaje ?> </textarea>
            <!---->
            <?php if(!empty($errores)): ?>

                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif(($enviado)): ?>
                <div class="alert sucess">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>