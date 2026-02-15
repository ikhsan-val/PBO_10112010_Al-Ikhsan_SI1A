<?php
class KalkulatorSuhu {
private $celcius;

 public function __construct($celcius) {
        $this->celcius = $celcius;
    }

 public function keFahrenheit() {
        return ($this->celcius * 9/5) + 32;
    }

 public function keKelvin() {
        return $this->celcius + 273.15;
    }

 public function getCelsius() {
        return $this->celcius;
    }
}

// Contoh penggunaan
$suhu = new KalkulatorSuhu(30);

echo "Suhu Celsius: " . $suhu->getCelsius() . "°C<br>";
echo "Suhu Fahrenheit: " . $suhu->keFahrenheit() . "°F<br>";
echo "Suhu Kelvin: " . $suhu->keKelvin() . " K";

?>