<?php

interface Movible {
    public function mover(); 
}

    class Auto implements Movible {
        public function mover() {
            echo "El auto se mueve";
        }
    }


?>