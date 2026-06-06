<?php

class ContaDeEnergia {
    private string $titular;
    private float $consumoKwh;
    private float $tarifaPorKwh;

    public function getTitular() { return $this->titular; }
    public function getConsumoKwh() { return $this->consumoKwh; }
    public function getTarifaPorKwh() { return $this->tarifaPorKwh; }

    public function setTitular(string $titular) {
        if (empty(trim($titular))) {
            echo "Erro: O nome do titular não pode ser vazio.\n";
            return;
        }
        $this->titular = $titular;
    }

    public function setConsumoKwh(float $consumoKwh) {
        if ($consumoKwh < 0) {
            echo "Erro: O consumo em kWh não pode ser negativo.\n";
            return;
        }
        $this->consumoKwh = $consumoKwh;
    }

    public function setTarifaPorKwh(float $tarifaPorKwh) {
        if ($tarifaPorKwh <= 0) {
            echo "Erro: A tarifa por kWh deve ser maior que zero.\n";
            return;
        }
        $this->tarifaPorKwh = $tarifaPorKwh;
    }

    public function exibir() {
        $valorTotal = $this->consumoKwh * $this->tarifaPorKwh;
        
        return "Titular: {$this->titular} | Consumo: {$this->consumoKwh} kWh | Tarifa: R$ {$this->tarifaPorKwh} | Valor Total: R$ " . number_format($valorTotal, 2, ',', '.');
    }
}

$conta = new ContaDeEnergia();
$conta->setTitular("Carlos Silva");
$conta->setConsumoKwh(250.5);
$conta->setTarifaPorKwh(0.85);
echo $conta->exibir() . "\n";

$conta->setConsumoKwh(-10);