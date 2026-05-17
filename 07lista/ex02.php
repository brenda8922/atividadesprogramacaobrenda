<?php
class Aluno {
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Brenda Aparecida";
$aluno1->nota1 = 9.0;
$aluno1->nota2 = 8.0;
echo "Aluno: {$aluno1->nome} | Média: " . number_format($aluno1->calcularMedia(), 1, '.', '') . "\n";
?>