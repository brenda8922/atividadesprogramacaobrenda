<?php

class Medico {
    private string $nome;
    private string $crm;
    private string $especialidade;

    public function getNome() { return $this->nome; }
    public function getCrm() { return $this->crm; }
    public function getEspecialidade() { return $this->especialidade; }

    public function setNome(string $nome) {
        if (empty(trim($nome))) {
            echo "Erro: O nome do médico não pode ser vazio.\n";
            return;
        }
        $this->nome = $nome;
    }

    public function setCrm(string $crm) {
        if (empty(trim($crm))) {
            echo "Erro: O CRM não pode ser vazio.\n";
            return;
        }
        $this->crm = $crm;
    }

    public function setEspecialidade(string $especialidade) {
        if (empty(trim($especialidade))) {
            echo "Erro: A especialidade não pode ser vazia.\n";
            return;
        }
        $this->especialidade = $especialidade;
    }

    public function exibir() {
        return "Dr(a). {$this->nome} | CRM: {$this->crm} | Especialidade: {$this->especialidade}";
    }
}

$medico = new Medico();
$medico->setNome("Ana Souza");
$medico->setCrm("123456/SP");
$medico->setEspecialidade("Cardiologia");
echo $medico->exibir() . "\n";

$medico->setCrm("");