<?php
class Retangulo {
    public $largura;
    public $altura;

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$retangulo = new Retangulo();
$retangulo->largura = 5.0;
$retangulo->altura = 3.0;
echo "Retângulo 1: {$retangulo->largura}cm x {$retangulo->altura}cm | Área: " . $retangulo->calcularArea() . " cm² | Perímetro: " . $retangulo->calcularPerimetro() . " cm\n";
?>