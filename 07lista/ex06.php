<?php
class Circulo {
    public $raio;

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    public function calcularCircunferencia() {
        return 2 * pi() * $this->raio;
    }
}

$circulo = new Circulo();
$circulo->raio = 3.00;
echo "Círculo 1: Raio = " . number_format($circulo->raio, 2, '.', '') . " cm | Área = " . number_format($circulo->calcularArea(), 2, '.', '') . " cm² | Circunferência = " . number_format($circulo->calcularCircunferencia(), 2, '.', '') . " cm\n";
?>