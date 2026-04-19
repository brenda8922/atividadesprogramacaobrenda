<?php
$valorCompra = 37.50;
$valorPago = 50.00;
$troco = $valorPago - $valorCompra;

echo "O troco a ser devolvido é R$ " . number_format($troco, 2, ',', '.');
?>