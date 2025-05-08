<?php

class Animal {
    public function Hablar() {
        return "Ladrar";
    }
}

class Perro extends Animal {
    public function hablar() {
        return "guau";
    }
}

?>