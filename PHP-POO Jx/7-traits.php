<?php
trait Log {
    public function registrar($mensaje) {
        echo "Log: $mensaje";
    }
}

class Usuario {
    use Log;
}

?>