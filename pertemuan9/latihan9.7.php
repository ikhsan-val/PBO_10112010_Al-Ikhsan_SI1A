<?php
// Abstract class sebagai 'kerangka'
abstract class Hewan {
    abstract public function Makan();
    abstract public function Bergerak();
    abstract public function Beranak();
}

// Class Burung mewarisi Hewan
class Burung extends Hewan {
    public function Makan() {
        return "Burung makan biji-bijian<br/>";
    }

    public function Bergerak() {
        return "Burung bergerak dengan berjalan, terbang dan melompat<br/>";
    }

    public function Beranak() {
        return "Burung beranak dengan bertelur<br/>";
    }
}

// Class Kambing mewarisi Hewan
class Kambing extends Hewan {
    public function Makan() { // Pastikan namanya Makan, bukan Hakan
        return "Kambing makan rumput<br/>";
    }

    public function Bergerak() {
        return "Kambing bergerak dengan berjalan dan berlari<br/>";
    }

    public function Beranak() {
        return "Kambing beranak dengan melahirkan<br/>";
    }
}

// Instansiasi
$burung = new Burung();
$kambing = new Kambing();

echo "<b>Perilaku Burung: </b><br/>";
echo $burung->Makan();
echo $burung->Bergerak();
echo $burung->Beranak();

echo "<br/>";

echo "<b>Perilaku Kambing: </b><br/>";
echo $kambing->Makan();
echo $kambing->Bergerak();
echo $kambing->Beranak();
?>