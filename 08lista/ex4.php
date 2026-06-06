<?php
class Veiculo {
    private string $marca;
    private string $modelo;
    private int $ano;

    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getAno() { return $this->ano; }

    public function setMarca(string $marca) {
        if (empty(trim($marca))) {
            echo "Erro: a marca não pode ser vazia.\n";
            return;
        }
        $this->marca = $marca;
    }

    public function setModelo(string $modelo) {
        if (empty(trim($modelo))) {
            echo "Erro: o modelo não pode ser vazio.\n";
            return;
        }
        $this->modelo = $modelo;
    }

    public function setAno(int $ano) {
        if ($ano < 1886) { // 1886 é considerado o ano do primeiro carro moderno
            echo "Erro: ano inválido.\n";
            return;
        }
        $this->ano = $ano;
    }

    public function exibir() {
        return "Veículo: {$this->marca} {$this->modelo} | Ano: {$this->ano}";
    }
}

$veiculo = new Veiculo();
$veiculo->setMarca("Honda");
$veiculo->setModelo("Civic");
$veiculo->setAno(2017);
echo $veiculo->exibir() . "\n";

$veiculo->setAno(1800);