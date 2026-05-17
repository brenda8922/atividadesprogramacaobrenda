<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;

    public function exibir() {
        return "Nome: {$this->nome} | Cargo: {$this->cargo} | Salário: R$ " . number_format($this->salario, 2, '.', '');
    }
}

$func = new Funcionario();
$func->nome = "Brenda";
$func->cargo = "Designer";
$func->salario = 4500.00;
echo $func->exibir() . "\n";
?>