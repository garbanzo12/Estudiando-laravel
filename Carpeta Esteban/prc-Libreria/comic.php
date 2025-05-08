<?php
require 'Book.php';

# Polimorfismo realizar una misma acción de diferentes formas.

class Comic  extends Book{ # Extends para heredar.
    public function __construct(
        $author, 
        $title, 
        $price,
        $stock, 
        $id,
        private array $Illustrators,
        private int $vol
    )
    {
        parent::__construct($author, $title, $price, $stock, $id);
    }

    public function getInfo(){

        $result = "Volumen $this->vol <br>";

        $ul = "<ul> -- Ilustradores -- </ul>"; 
        foreach($this->Illustrators as $Illustrator){
            $ul .= "<li> $Illustrator</li>";
        }

        $ul .= "</ul>";
        echo parent::getInfo();
        
        return $result .= $ul;
    }
}

$comic1 = new Comic(
    'Esteban',
    'Batman: The killing Joke',
    120.00,
    90,
    1,
    ['Yo', 'Tu'],
    1
);

echo $comic1->getInfo();