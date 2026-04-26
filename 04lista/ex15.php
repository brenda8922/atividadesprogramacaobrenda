<?php
$temperatura = 34;
if ($temperatura < 15) {
    echo "frio";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "agradavel";
} elseif ($temperatura > 25 && $temperatura <= 35) {
    echo "quente";
} else {
    echo "muito quente";
}
?>