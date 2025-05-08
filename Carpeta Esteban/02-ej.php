<?php

class Persona{
    public $nombre;
    public $apellido;

    public function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludar(){
        echo 'Bienvenido '. $this->nombre . ' ¡Disfrutalo!';
    }
}

$usuario1 = new Persona('Damian', 'Patiño');

$usuario1->saludar();
?>

