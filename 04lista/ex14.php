<?php
$salarioBase = 4000.00;
$anosEmpresa = 8;
$atingiuMeta = true;

if ($anosEmpresa > 5 && $atingiuMeta) {
    $bonus = $salarioBase * 0.20;
} elseif ($anosEmpresa >= 2 && $atingiuMeta) {
    $bonus = $salarioBase * 0.10;
} else {
    $bonus = 0;
}

$salarioFinal = $salarioBase + $bonus;
echo "o salario final e R$ " . number_format($salarioFinal, 2, ',', '.');
?>