<!-- elaborado por carlos andres -->
<?php
/**
 * Interfaz para figuras geométricas.
 */
interface Figura {
    public function getArea(): float;
    public function getPerimetro(): float;
}

/**
 * Clase Rectangulo que implementa Figura.
 */
class Rectangulo implements Figura {
    private float $ancho;
    private float $alto;

    public function __construct(float $ancho, float $alto) {
        if ($ancho <= 0 || $alto <= 0) {
            throw new InvalidArgumentException('Dimensiones deben ser mayores que cero.');
        }
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function getArea(): float {
        return $this->ancho * $this->alto;
    }

    public function getPerimetro(): float {
        return 2 * ($this->ancho + $this->alto);
    }
}

// === Ejemplo de uso ===
try {
    $r = new Rectangulo(5.0, 3.0);
    echo 'Área: ' . $r->getArea() . "\n";
    echo 'Perímetro: ' . $r->getPerimetro() . "\n";
} catch (InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
?>