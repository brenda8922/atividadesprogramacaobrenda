<?php
class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;

    public function getNome() { return $this->nome; }
    public function getCargo() { return $this->cargo; }
    public function getSalario() { return $this->salario; }

    public function setNome(string $nome) {
        if (empty(trim($nome))) {
            echo "Erro: o nome não pode ser vazio.\n";
            return;
        }
        $this->nome = $nome;
    }

    public function setCargo(string $cargo) {
        if (empty(trim($cargo))) {
            echo "Erro: o cargo não pode ser vazio.\n";
            return;
        }
        $this->cargo = $cargo;
    }

    public function setSalario(float $salario) {
        if ($salario < 0) {
            echo "Erro: o salário não pode ser negativo.\n";
            return;
        }
        $this->salario = $salario;
    }

    public function exibir() {
        return "Funcionário: {$this->nome} | Cargo: {$this->cargo} | Salário: R$ " . number_format($this->salario, 2, ',', '.');
    }
}

$funcionario = new Funcionario();
$funcionario->setNome("Carla Reis");
$funcionario->setCargo("Desenvolvedora Back-end");
$funcionario->setSalario(9000.00);
echo $funcionario->exibir() . "\n";

$funcionario->setSalario(-500.00); 