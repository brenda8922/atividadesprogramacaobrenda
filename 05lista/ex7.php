<?php
$notas = [8, 5, 7, 4, 9];
$aprovados = 0;

foreach ($notas as $nota) {
    if ($nota >= 6) { 
        $aprovados++; 
    }
}

echo "total de aprovados: {$aprovados}"; 
?>