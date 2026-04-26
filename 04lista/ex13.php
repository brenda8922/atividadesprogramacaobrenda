<?php
$idade = 27;
$nivel = 2;
$bloqueado = false;

if ($bloqueado) {
    echo "acesso negado";
} elseif ($nivel == 3) {
    echo "acesso total";
} elseif ($nivel == 2 && $idade >= 18) {
    echo "acesso parcial";
} else {
    echo "acesso limitado";
}
?>