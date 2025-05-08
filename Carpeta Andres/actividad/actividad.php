<!-- Carlos andres reyes grajales -->
/ === Actividad para desarrollar ===
// Crea una clase "CuentaBancaria" que incluya:
//  - Propiedades: titular (string), saldo (float).
//  - Constructor que reciba el titular y un saldo inicial (>= 0).
//  - Métodos: depositar(float $monto): void, retirar(float $monto): void,
//    getSaldo(): float.
//  - Excepciones: lanzar InvalidArgumentException si el monto es negativo
//    o si se intenta retirar más del saldo disponible.
//  - Ejemplo de uso: instancia una cuenta, realiza depósitos y retiros,
//    y muestra el saldo tras cada operación.  

<!-- solucion -->
<?php
class CuentaBancaria {
    private string $titular;
    private float $saldo;

    /**
     * Constructor.
     *
     * @param string $titular      Nombre del titular.
     * @param float  $saldoInicial Saldo inicial (>= 0).
     * @throws InvalidArgumentException Si el saldo inicial es negativo.
     */
    public function __construct(string $titular, float $saldoInicial) {
        if ($saldoInicial < 0) {
            throw new InvalidArgumentException('Saldo inicial no puede ser negativo.');
        }
        $this->titular = $titular;
        $this->saldo   = $saldoInicial;
    }

    /**
     * Deposita un monto en la cuenta.
     *
     * @param float $monto Monto a depositar (> 0).
     * @throws InvalidArgumentException Si el monto es negativo o cero.
     */
    public function depositar(float $monto): void {
        if ($monto <= 0) {
            throw new InvalidArgumentException('El monto a depositar debe ser mayor que cero.');
        }
        $this->saldo += $monto;
    }

    /**
     * Retira un monto de la cuenta.
     *
     * @param float $monto Monto a retirar (> 0 y <= saldo disponible).
     * @throws InvalidArgumentException Si el monto es negativo o mayor al saldo.
     */
    public function retirar(float $monto): void {
        if ($monto <= 0) {
            throw new InvalidArgumentException('El monto a retirar debe ser mayor que cero.');
        }
        if ($monto > $this->saldo) {
            throw new InvalidArgumentException(
                'Saldo insuficiente para retirar ' . $monto . '. Saldo actual: ' . $this->saldo
            );
        }
        $this->saldo -= $monto;
    }

    /**
     * Obtiene el saldo actual.
     *
     * @return float Saldo de la cuenta.
     */
    public function getSaldo(): float {
        return $this->saldo;
    }
}

// === Ejemplo de uso de CuentaBancaria ===
try {
    $cuenta = new CuentaBancaria('María López', 1000.00);
    echo "Saldo inicial: " . number_format($cuenta->getSaldo(), 2) . "\n";

    $cuenta->depositar(500);
    echo "Después de depositar 500: " . number_format($cuenta->getSaldo(), 2) . "\n";

    $cuenta->retirar(200);
    echo "Después de retirar 200: " . number_format($cuenta->getSaldo(), 2) . "\n";

    // Prueba de excepción por saldo insuficiente:
    // $cuenta->retirar(2000);

} catch (InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}
?>