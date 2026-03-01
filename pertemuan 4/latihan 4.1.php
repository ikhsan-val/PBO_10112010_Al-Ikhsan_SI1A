<?php
function formatRupiah($angka)
    {
        return "Rp. " . number_format(num: $angka)
    } 
class belanja
    { 
        public $nama;
        public $barang;
        public $harga;
        public $jumlahBeli;


        public function hitungSubtotal($harga)
        {
            return $this->$jumlahBeli * $harga;
        }
        public function diskon($subtotal,$persenDiskon):float
{
    return ($persenDiskon/100) * $subtotal;
    }
    
        public function hitungTotal($harga,$persenDiskon)
        {
            $subtotal=$this->hitungSubtotal($harga);
            $diskon=$this->diskon($subtotal,$persenDiskon);
            return $subtotal - $diskon;
        }

    }
    $data = [
        "nama" => htmlspecialchars($_POST['nama']),
        "harga"=>int ($_POST['harga']),
        "jumlah"=>int ($_POST['jumlah']),
        "diskon"=>int ($_POST['diskon'])
    ];
$produk = new produk1();
$produk ->nama = $data["nama"];
$produk ->harga = $data["harga"];
$subtotal = $produk -> hitungSubtotal($data["jumlah"]); 
$data = $produk -> diskon($subtotal, $data["diskon"]); 
$total = $produk ->diskon($data["jumlah"], $data["diskon"]); 

echo "<h2> HASIL BELANJA</h2>";
echo "produk :" . $produk->$nama . "</br>";
echo "harga :" . $produk->$nama . "</br>";
echo "jumlah :" . $produk->$nama . "</br>";
echo "subtotal :" . $produk->$nama . "</br>";
echo "diskon :" . $produk->$nama . "</br>";
echo "<b>produk :"formatRupiah($total)."</b>";
?>