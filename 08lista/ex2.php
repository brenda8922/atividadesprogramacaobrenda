<?php
class Aluno {
    private string $nome;
    private string $matricula;
    private float $nota;

    public function getNome() { return $this->nome; }
    public function getMatricula() { return $this->matricula; }
    public function getNota() { return $this->nota; }

    public function setNome(string $nome) {
        if (empty(trim($nome))) {
            echo "Erro: o nome não pode ser vazio.\n";
            return;
        }
        $this->nome = $nome;
    }

    public function setMatricula(string $matricula) {
        if (empty(trim($matricula))) {
            echo "Erro: a matrícula não pode ser vazia.\n";
            return;
        }
        $this->matricula = $matricula;
    }

    public function setNota(float $nota) {
        if ($nota < 0.0 || $nota > 10.0) {
            echo "Erro: a nota deve estar entre 0.0 e 10.0.\n";
            return;
        }
        $this->nota = $nota;
    }

    public function exibir() {
        return "Aluno: {$this->nome} | Matrícula: {$this->matricula} | Nota: {$this->nota}";
    }
}

$aluno = new Aluno();
$aluno->setNome("Brenda Santos");
$aluno->setMatricula("20260701");
$aluno->setNota(9.0);
echo $aluno->exibir() . "\n";

$aluno->setNota(11.5); 