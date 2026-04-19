<?php
$nomeCliente = "Patrick";
$valorProduto = 100.00;
$percentualDesconto = 30;

$valorDesconto = $valorProduto * ($percentualDesconto / 100);
$valorFinal = $valorProduto - $valorDesconto;

echo "o cliente {$nomeCliente} comprou um produto de R$ " . number_format($valorProduto, 2, ',', '.') . 
     ", recebeu R$ " . number_format($valorDesconto, 2, ',', '.') . 
     " de desconto e pagará R$ " . number_format($valorFinal, 2, ',', '.');
?>