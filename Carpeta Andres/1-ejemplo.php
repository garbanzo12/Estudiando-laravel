<?php
// Elaborado por Carlos Andres Reyes Grajales 
declare(strict_types=1);
// cLase del circulo 
class Circulo {
    /** @var float */
    private float $radio;

    /**
     * Circulo constructor.
     * @param float $radio
     * @throws InvalidArgumentException si el radio no es válido
     */
    public function __construct(float $radio) {
        if ($radio <= 0) {
            throw new InvalidArgumentException("El radio debe ser mayor que cero. Valor dado: $radio");
        }
        $this->radio = $radio;
    }

    /**
     * Calcula el área del círculo.
     * @return float
     */
    public function getArea(): float {
        return pi() * ($this->radio ** 2);
    }

    /**
     * Calcula el perímetro (circunferencia) del círculo.
     * @return float
     */
    public function getPerimetro(): float {
        return 2 * pi() * $this->radio;
    }

    /**
     * Obtiene el radio.
     * @return float
     */
    public function getRadio(): float {
        return $this->radio;
    }
}

// === Ejemplo de uso ===
try {
    $circulo = new Circulo(3.5);
    echo "Radio: " . $circulo->getRadio() . "\n";
    echo "Área: " . round($circulo->getArea(), 2) . "\n";
    echo "Perímetro: " . round($circulo->getPerimetro(), 2) . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>