
<?php

function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}


class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    
    public function hitungSubtotal(): int {
        return $this->hargaBarang * $this->jumlahBeli;
}
public function hitungdiskon($subtotal) : float{
    if ($subtotal > 100000){
        return $subtotal * 0.1;
    }
    return 0;
}

    public function hitungtotaldengandiskon(){
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungdiskon($subtotal);
        return $subtotal - $diskon;
    }


}

$data =[
    [
    'namaPembeli'=> "ismi",
    'namaBarang'=> "sepatu",
    'hargaBarang'=> 3000000,
    'jumlahBeli'=> 1,
],
[
    'namaPembeli'=> "ikhsan",
    'namaBarang'=> "Parfum",
    'hargaBarang'=> 300000,
    'jumlahBeli'=> 1,
]
];

echo "<h2> Pembelian 1</h2>";
$error1 = [];
$namaPembeli = $data[0]["namaPembeli"];
$namaBarang = $data[0]["namaBarang"];
$jumlahBeli = $data[0]["jumlahBeli"];
$hargaBarang = $data[0]["hargaBarang"];

if (empty($namaPembeli)){
    $error1[] = "Nama Pembeli tidak boleh kosong." ;
}
if (empty($namaBarang)){
    $error1[] = "Nama barang tidak boleh kosong." ;
}
if ($jumlahBeli){
    $error1[] = "jumlah beli harus lebih dari 0." ;
}
if ($hargaBarang){
    $error1[] = "Harga barang harus lebih dari 0." ;
}
if (empty($error1)){
   foreach($error1 as $error){
    echo $error . "<br>";
      }
} else {
$belanja1 = new Belanja();
$belanja1->namaPembeli = $data["namaPembeli"];
$belanja1->namaBarang = $data["namaBarang"];
$belanja1->hargaBarang = $data["hargaBarang"];
$belanja1->jumlahBeli = $data["jumlahBeli"];

echo "<h2>Struk Belanja</h2>";

echo "Nama Pembeli : " . $belanja1->namaPembeli . "<br>";
echo "Nama Baramg : " . $belanja1->namaBarang . "<br>";
echo "Subtotal : " . formatRupiah($belanja1->hitungSubtotal()) . "<br>";
echo "diskon : " . formatRupiah($belanja1->hitungdiskon(3000000)) . "<br>";
echo "Total  : " . formatRupiah($belanja1 ->hitungtotaldengandiskon()) . "<br>";
} 

echo "<h2> Pembelian 2</h2>";
$error1 = [];
$namaPembeli = $data[1]["namaPembeli"];
$namaBarang = $data[1]["namaBarang"];
$jumlahBeli = $data[1]["jumlahBeli"];
$hargaBarang = $data[1]["hargaBarang"];

if (empty($namaPembeli)){
    $error1[] = "Nama Pembeli tidak boleh kosong." ;
}
if (empty($namaBarang)){
    $error1[] = "Nama barang tidak boleh kosong." ;
}
if ($jumlahBeli){
    $error1[] = "jumlah beli harus lebih dari 0." ;
}
if ($hargaBarang){
    $error1[] = "Harga barang harus lebih dari 0." ;
}
if (empty($error1)){
   foreach($error1 as $error){
    echo $error . "<br>";
      }
} else {
$belanja1 = new Belanja();
$belanja1->namaPembeli = $data["namaPembeli"];
$belanja1->namaBarang = $data ["namaBarang"];
$belanja1->hargaBarang = $data ["hargaBarang"];
$belanja1->jumlahBeli = $data["jumlahBeli"];

echo "<h2>Struk Belanja</h2>";

echo "Nama Pembeli : " . $belanja1->namaPembeli . "<br>";
echo "Nama Baramg : " . $belanja1->namaBarang . "<br>";
echo "Subtotal : " . formatRupiah($belanja1->hitungSubtotal()) . "<br>";
echo "diskon : " . formatRupiah($belanja1->hitungdiskon(300000)) . "<br>";
echo "Total  : " . formatRupiah($belanja1 ->hitungtotaldengandiskon()) . "<br>";
}
?>
