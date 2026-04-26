<?php
$contador = 1;
$soma = 0; 

while ($contador <= 10) { 
    if ($contador % 2 == 0) { 
        $soma += $contador;
    }
    $contador++;
}

echo "soma dos pares: {$soma}"; 
?>