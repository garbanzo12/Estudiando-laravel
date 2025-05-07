<!-- Encapsulamiento:  Este principio se refiere a la capacidad de ocultar los detalles de implementación interna de un objeto y exponer solo las interfaces necesarias para interactuar con él. Esto ayuda a mantener el código más modular y fácil de mantener. -->
<!-- Polimorfismo: El polimorfismo permite que objetos de diferentes clases respondan de manera similar a un conjunto común de métodos. Esto facilita el uso de interfaces genéricas en lugar de tratar con clases específicas. -->
<!-- Herencia:  La herencia permite que una clase (subclase) herede propiedades y métodos de otra clase (superclase). Esto promueve la reutilización de código y la extensibilidad. -->
<!-- Abtraccion:  La abstracción consiste en la creación de clases y objetos que representan conceptos del mundo real en tu aplicación. Puedes definir las propiedades y métodos necesarios para modelar esos conceptos. -->

<!-- Definiciòn de clases -->

<?php
class Coche{

    // Propiedades
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    // Métodos
    public function arrancar(){
        echo 'El coche está arrancando';
    }

    public function frenar(){
        echo 'EL coche esta frenando'; 
    }

    public function __toString() /* Metodo magico. */
    {
        return "Marca: $this->marca, Modelo: $this->modelo";
    }
}

$miCoche = new Coche("Toyota", "Txl"); # Instanciación

echo $miCoche;

$miCoche->arrancar(); /* Forma de usar metodos. */
$miCoche->frenar(); 
?>