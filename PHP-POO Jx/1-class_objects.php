<?php

class User {
    public $nombre;
    public function persona() {
        return "hola, $this->nombre";
    }
}

$usuario = new User();
$usuario->nombre = "Jota";
echo $usuario->persona();

?>