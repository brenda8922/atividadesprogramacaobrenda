<?php
$numeros = [5, 8, 2, 15, 3]; 
$maior = $numeros[0]; 

foreach ($numeros as $n) { 
    if ($n > $maior) { 
        $maior = $n;
    }
}

echo "o maior numero e: {$maior}"; 
?>