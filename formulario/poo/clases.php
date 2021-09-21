
<?php

class Persona{
    public $nombre;
    public $edad;

    function __construct($nombre,$edad){
        $this -> nombre = $nombre;
        $this -> edad = $edad;
    }
    
    public function mostrar_info(){
        echo "Nombre: $this->nombre Edad: $this->edad";
    }
}

$persona1 = new Persona("Felipe",21);

$persona1 -> mostrar_info();


?>