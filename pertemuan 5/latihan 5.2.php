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

    public function diskon($subtotal) {
        if ($subtotal > 100000) {
            return $subtotal * 0.1;
        } else {
            return 0;
        }
    }

    public function hitungtotaldengandiskon() {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->diskon($subtotal);
        return $subtotal - $diskon;
    }
}

$data = [
    [
        "namaPembeli" => "Ikhsan",
        "namaBarang" => "Kaos",
        "hargaBarang" => 300000,
        "jumlahBeli" => 1,
    ],
    [
        "namaPembeli" => "Budi",
        "namaBarang" => "celana",
        "hargaBarang" => 200000,
        "jumlahBeli" => 1,
    ]
];

echo "<h2>TRANSAKSI 1</h2>";
$error1 = [];

$nama = $data[0]["namaPembeli"];
$barang = $data[0]["namaBarang"];
$harga = $data[0]["hargaBarang"];
$jumlah = $data[0]["jumlahBeli"];

if (empty($nama))
     $error1[] = "Nama pembeli tidak boleh kosong";

if (empty($barang)) 
    $error1[] = "Nama barang tidak boleh kosong";

if ($jumlah <= 0) 
    $error1[] = "Barang harus lebih dari 0";

if ($harga <= 0) 
    $error1[] = "Harga harus lebih dari 0";

if (!empty($error1)) {
    foreach ($error1 as $error) {
        echo $error . "<br>";
    }
} else {
    $belanja1 = new Belanja();
    $belanja1->namaPembeli = $nama;
    $belanja1->namaBarang = $barang;
    $belanja1->hargaBarang = $harga;
    $belanja1->jumlahBeli = $jumlah;

    $subtotal = $belanja1->hitungSubtotal();
    $diskon = $belanja1->diskon($subtotal);
    $total = $belanja1->hitungtotaldengandiskon();

    echo "Nama Pembeli : " . $belanja1->namaPembeli . "<br>";
    echo "Nama Barang : " . $belanja1->namaBarang . "<br>";
    echo "Subtotal : " . formatRupiah($subtotal) . "<br>";
    echo "Diskon : " . formatRupiah($diskon) . "<br>";
    echo "<b>Total bayar : " . formatRupiah($total) . "</b><br>";
}


echo "<h2>TRANSAKSI 2</h2>";
$error2 = [];

$nama = $data[1]["namaPembeli"];
$barang = $data[1]["namaBarang"];
$harga = $data[1]["hargaBarang"];
$jumlah = $data[1]["jumlahBeli"];

if (empty($nama)) 
    $error2[] = "Nama pembeli tidak boleh kosong";
if (empty($barang)) 
    $error2[] = "Nama barang tidak boleh kosong";

if ($jumlah <= 0) 
    $error2[] = "Barang harus lebih dari 0";

if ($harga <= 0) 
    $error2[] = "Harga harus lebih dari 0";

if (!empty($error2)) {
    foreach ($error2 as $error) {
        echo $error . "<br>";
    }
} else {
    $belanja2 = new Belanja();
    $belanja2->namaPembeli = $nama;
    $belanja2->namaBarang = $barang;
    $belanja2->hargaBarang = $harga;
    $belanja2->jumlahBeli = $jumlah;

    $subtotal = $belanja2->hitungSubtotal();
    $diskon = $belanja2->diskon($subtotal);
    $total = $belanja2->hitungtotaldengandiskon();

    echo "Nama Pembeli : " . $belanja2->namaPembeli . "<br>";
    echo "Nama Barang : " . $belanja2->namaBarang . "<br>";
    echo "Subtotal : " . formatRupiah($subtotal) . "<br>";
    echo "Diskon : " . formatRupiah($diskon) . "<br>";
    echo "<b>Total bayar : " . formatRupiah($total) . "</b><br>";
}

?>