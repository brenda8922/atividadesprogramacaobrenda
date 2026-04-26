<?php
$valorCompra = 37.50;
$valorPago = 50.00;
$troco = $valorPago - $valorCompra;

echo "o troco a ser devolvido e R$ " . number_format($troco, 2, ',', '.');
?>