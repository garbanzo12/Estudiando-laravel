<?php

class Book{
    
    // Propiedades

    // Metodos: definen el comportamiento de nuestros objetos.
    // Métododos magico, se llama solo.
    public function __construct( // Metodo magico., es bueno especificar el tipo, para el manejo de errores.
        private string $author, 
        private string $title, 
        private string $price,
        private int $stock, 
        private int $id
    ) 
    {}

    public function getInfo()
    {
        $info = "<b> $this->title Escrito por: <i> $this->author</i></b> <br>
        precio: $this->price <br>
        exitencias: $this->stock <br>
        id: $this->id";
        return $info;
    }
}

$book1 = new Book( # Instanciación. 
    'George 0.',
    'Rebelión en la granja',
    199.90,
    100,
    1
);

// var_dump($book1);

// Para imprimir datos unicos
echo $book1->getInfo();
?>