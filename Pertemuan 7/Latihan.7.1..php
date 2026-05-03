<?php
class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        return "Produk: $this->nama - Rp." . number_format($this->harga, 0, ",", ".");
    }
}

class ProdukDigital extends Produk {
    public $sizeFile;

    public function __construct($nama, $harga, $sizeFile){
        parent::__construct($nama, $harga);
        $this->sizeFile = $sizeFile;
    }

    public function getInfo(){
        return "Produk Digital: $this->nama - Rp." . number_format($this->harga, 0, ",", ".") . " - Size: $this->sizeFile MB";
    }
}

$p = new Produk("Buku", 50000);
$p2 = new ProdukDigital("Ebook", 200000, 100);

echo $p->getInfo();
echo "<br>";
echo $p2->getInfo();
echo "<br>";
?>