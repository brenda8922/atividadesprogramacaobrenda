<?php
$capital = 7000.00;
$taxaJuros = 0.16;
$tempo = 20;
$juros = $capital * $taxaJuros * $tempo;

echo "o valor do juros gerado é R$ " . number_format($juros, 2, ',', '.');
?>