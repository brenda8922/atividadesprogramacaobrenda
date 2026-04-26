<?php
$nota = 9.0;
$frequencia = 90;
if ($nota >= 6 && $frequencia >= 75) {
    echo "o aluno esta aprovado";
} elseif ($nota >= 6 && $frequencia < 75) {
    echo "o aluno esta reprovado por falta";
} else {
    echo "o aluno esta reprovado por nota";
}
?>