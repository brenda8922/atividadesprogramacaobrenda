<?php
$valorCompra = 300.00;
if ($valorCompra >= 100) {
    $valorFinal = $valorCompra * 0.90;
} else {
    $valorFinal = $valorCompra;
}
echo "valor final: R$ " . number_format($valorFinal, 2, ',', '.');
?>