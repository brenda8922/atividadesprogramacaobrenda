<?php
class Livro {
    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $preco;

    public function exibir() {
        return "\"{$this->titulo}\" de {$this->autor} | {$this->numeroPaginas} páginas | R$ " . number_format($this->preco, 2, ',', '.');
    }
}

$livro = new Livro();
$livro->titulo = "O Homem de Giz";
$livro->autor = "C.J Tudor";
$livro->numeroPaginas = 272;
$livro->preco = 69.90;
echo $livro->exibir() . "\n";
?>