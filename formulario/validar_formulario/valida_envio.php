<?php
//$_SERVER['REQUEST_METHOD'] => Metodo de envio
// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo "Se han enviado por get";
// }else{
//     echo "Se han enviado por post";
// }

if(isset($_POST['submit'])){
    echo "Se han enviado los datos";
}else{
    echo "No se han enviado los datos";
}


?>