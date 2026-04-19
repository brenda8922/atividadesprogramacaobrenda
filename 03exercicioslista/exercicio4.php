<?php
$valorProduto = 300.00;
$percentualDesconto = 30;
$desconto = $valorProduto * ($percentualDesconto / 100);
$valorFinal = $valorProduto - $desconto;

echo "O produto custava R$ {$valorProduto} e agora custa R$ {$valorFinal}";
?>