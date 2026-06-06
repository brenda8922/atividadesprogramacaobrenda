<?php
class Livro {
    private string $titulo;
    private string $autor;
    private float $preco;

    public function getTitulo() { return $this->titulo; }
    public function getAutor() { return $this->autor; }
    public function getPreco() { return $this->preco; }

    public function setTitulo(string $titulo) {
        if (empty(trim($titulo))) {
            echo "Erro: o título não pode ser vazio.\n";
            return;
        }
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor) {
        if (empty(trim($autor))) {
            echo "Erro: o autor não pode ser vazio.\n";
            return;
        }
        $this->autor = $autor;
    }

    public function setPreco(float $preco) {
        if ($preco < 0) {
            echo "Erro: o preço não pode ser negativo.\n";
            return;
        }
        $this->preco = $preco;
    }

    public function exibir() {
        return "Livro: {$this->titulo} | Autor: {$this->autor} | Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }
}

$livro = new Livro();
$livro->setTitulo("O inicio da programação");
$livro->setAutor("Brenda Santos");
$livro->setPreco(70.00);
echo $livro->exibir() . "\n";

$livro->setPreco(-15.00); 