<?php
class Temperatura {
    public $celsius;

    public function paraFahrenheit() {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function paraKelvin() {
        return $this->celsius + 273.15;
    }
}

$temp = new Temperatura();
$temp->celsius = 30;
echo number_format($temp->celsius, 2, '.', '') . "°C = " . number_format($temp->paraFahrenheit(), 2, '.', '') . "°F = " . number_format($temp->paraKelvin(), 2, '.', '') . "K\n";
?>