<?php
//En este archivo estudie como crear clases y objetos, a usar propiedades y métodos, a usar __construct() y __toString() y la hrencia básica con extends y parent::__construct() 
class persona {
    public $nombre;
    public $edad;

    public function saludar() {
        return "Hola, soy  $this->nombre y tengo $this->edad años.";
    }
}

$persona1 = new persona();
$persona1->nombre = "Sebastian";
$persona1->edad = 17;
echo $persona1->saludar();

echo "<br>";

class fecha{
    public $mes;
    public $anio;

    public function __construct($mes, $anio) {
        $this->mes = $mes;
        $this->anio = $anio;
    }

    public function __toString() {
        return "Nací en el mes: $this->mes del año $this->anio";
    }
}

$fecha1 = new fecha("Julio", "2007");
echo $fecha1;

echo"<br>";

class personas {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

class jefe extends personas {
    public $puesto; 

    public function __construct($nombre, $puesto) {
        parent::__construct($nombre);
        $this->puesto = $puesto;
    }

    public function     __toString() {
        return "soy $this->nombre y mi cargo es $this->puesto";
    }
}

$puesto1 = new jefe("Sebastian", "Jefe");
echo $puesto1;

?>