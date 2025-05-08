<?php

class Cuenta {
    private $saldo = 20;

    public function depositar ($cantidad) {

        $this->saldo += $cantidad;
    }
    public function obtenerSaldo () {
        return  $this->saldo;
    } 
}

?>