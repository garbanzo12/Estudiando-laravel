<?php
class Usuario {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

$usuario = new Usuario("Hola")
?>