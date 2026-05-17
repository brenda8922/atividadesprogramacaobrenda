<?php
class Agenda {
    public $nomeContato;
    public $telefone;
    public $email;
    public $favorito;

    public function exibirContato() {
        $favString = $this->favorito ? "Sim" : "Não";
        return "Contato: {$this->nomeContato} | Tel: {$this->telefone} | Email: {$this->email} | Favorito: {$favString}";
    }
}

$contato = new Agenda();
$contato->nomeContato = "Brenda Aparecida";
$contato->telefone = "(12) 91234-8765";
$contato->email = "brendaah@email.com";
$contato->favorito = true;
echo $contato->exibirContato() . "\n";
?>