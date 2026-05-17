<?php
class Veiculo {
    public $marca;
    public $modelo;
    public $ano;
    public $velocidadeAtual = 0.0;

    public function acelerar($incremento) {
        $this->velocidadeAtual += $incremento;
        echo "Acelerando: velocidade atual = " . number_format($this->velocidadeAtual, 1, '.', '') . " km/h\n";
    }

    public function frear($decremento) {
        $this->velocidadeAtual -= $decremento;
        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0.0;
        }
        echo "Freando: velocidade atual = " . number_format($this->velocidadeAtual, 1, '.', '') . " km/h\n";
    }
}

$carro = new Veiculo();
$carro->acelerar(40.0);
$carro->acelerar(40.0);
$carro->frear(20.0);
$carro->frear(70.0);
?>