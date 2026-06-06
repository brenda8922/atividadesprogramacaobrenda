<?php

class Produto {
    private string $nome;
    private float $preco;
    private int $estoque;

    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }
    public function getEstoque() { return $this->estoque; }

    public function setNome(string $nome) {
        if (empty(trim($nome))) {
            echo "Erro: O nome do produto não pode ser vazio.\n";
            return;
        }
        $this->nome = $nome;
    }

    public function setPreco(float $preco) {
        if ($preco < 0) {
            echo "Erro: O preço não pode ser negativo.\n";
            return;
        }
        $this->preco = $preco;
    }

    public function setEstoque(int $estoque) {
        if ($estoque < 0) {
            echo "Erro: A quantidade em estoque não pode ser negativa.\n";
            return;
        }
        $this->estoque = $estoque;
    }

    public function exibir() {
        return "Produto: {$this->nome} | Preço: R$ " . number_format($this->preco, 2, ',', '.') . " | Estoque: {$this->estoque} unidades";
    }
}

$produto = new Produto();
$produto->setNome("Notebook");
$produto->setPreco(3500.99);
$produto->setEstoque(10);
echo $produto->exibir() . "\n";

$produto->setPreco(-50);