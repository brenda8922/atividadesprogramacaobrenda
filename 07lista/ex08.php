<?php
class Filme {
    public $titulo;
    public $genero;
    public $duracaoMinutos;
    public $notaAvaliacao;

    public function exibir() {
        $horas = floor($this->duracaoMinutos / 60);
        $minutos = $this->duracaoMinutos % 60;
        return "Título: {$this->titulo} | Gênero: {$this->genero} | Duração: {$horas}h{$minutos}min | Nota: {$this->notaAvaliacao}";
    }
}

$filme = new Filme();
$filme->titulo = "Crepusculo";
$filme->genero = "Romance";
$filme->duracaoMinutos = 122;
$filme->notaAvaliacao = 5.2;
echo $filme->exibir() . "\n";
?>