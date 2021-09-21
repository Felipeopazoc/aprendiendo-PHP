<?php
    $mensaje_error="";
    $alerta = "";
    if(isset($_POST['submit'])){//Se pregunta si está seteado submit
        //Capturamos todos los datos desde el formulario
        $nombre = $_POST['nombre'];
        $apellidop = $_POST['apellidop'];
        $apellidom = $_POST['apellidom'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        if(!empty($nombre)){
            $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
            //echo "Su nombre es $nombre";
        }else{
            $mensaje_error.= 'Por favor ingresar un nombre <br>';
        }
        if(!empty($apellidop)){
            $apellidop = filter_var($apellidop,FILTER_SANITIZE_STRING);
        }else{
            $mensaje_error = 'Por favor ingresar un apellido <br>';
        }
        if(!empty($apellidom)){
            $apellidom = filter_var($apellidom,FILTER_SANITIZE_STRING);
        }else{
            $mensaje_error = 'Por favor ingresar un apellido <br>';
        }
        if(!empty($correo)){
            $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                $mensaje_error.= 'Correo Inválido <br>';
            }
        }else{
            $mensaje_error = 'Por favor ingresar un Correo <br>';
        }
        if(empty($password)){
            $mensaje_error.= "Por favor ingresar una contraseña";
        }

        if(!empty($nombre) and !empty($apellidop) and !empty($apellidom) and !empty($correo) and !empty($password)){
            $alerta.="Datos capturados exitosamente";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-container">
        <header class="header">
            <nav class="nav">
                <ul class="list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre mi</a></li>
                    <li><a href="#">Redes Sociales</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <div class="contenido">
            <h1>Formulario de Registro</h1>
            <form method="post" class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="box">
                <label for="nombre">Nombre</label>
                <input autocomplete="off" type="text" name="nombre" id="nombre">
                </div>
                <div class="box">
                <label for="apellidop">Apellido Paterno</label>
                <input autocomplete="off" type="text" name="apellidop">
                </div>
                <div class="box">
                    <label for="apellidom">Apellido Materno</label>
                    <input autocomplete="off" type="text" name="apellidom">
                </div>
                <div class="box">
                    <label for="correo">Correo</label>
                    <input autocomplete="off" type="email" name="correo">
                </div>
                <div class="box">
                    <label for="password">Contraseña</label>
                    <input autocomplete="off" type="password" name="password">
                </div>
                
                <input type="submit" value="Registrar Persona" name="submit">
            </form>
            <?php if(!empty($mensaje_error)): ?>
                <div class="error"> <?php echo $mensaje_error ?>  </div>
           <?php endif; ?>
           <?php if(!empty($alerta)): ?>
                <div class="alerta"> <?php echo $alerta ?></div>
           <?php endif; ?>
        </div>
       
            
        
    </div>    
</body>
</html>