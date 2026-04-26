<?php
$valorCompra = 189.00;
$vip = true;
if ($valorCompra >= 200 || $vip) {
    $valorFinal = $valorCompra * 0.85;
} elseif ($valorCompra >= 100) {
    $valorFinal = $valorCompra * 0.90;
} else {
    $valorFinal = $valorCompra;
}
echo "valor final: R$ " . number_format($valorFinal, 2, ',', '.');
?>