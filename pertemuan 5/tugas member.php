<?php

function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class Belanja {
    public $namaPembeli;
    public $member;
    public $totalBelanja;

   public function diskon() {

    if ($this->member == "ya") {

        if ($this->totalBelanja >= 500000) {
            return 50000;
        } 
        elseif ($this->totalBelanja >= 100000) {
            return 15000;
        }

    } else {

        if ($this->totalBelanja >= 100000) {
            return 5000;
        }

    }

    return 0;
}
    public function totalBayar() {
        return $this->totalBelanja - $this->diskon();
    }

    public function statusMember() {
        if ($this->member == "ya") {
            return "Memiliki Kartu Member";
        } else {
            return "Tidak Memiliki Kartu Member";
        }
    }
}

$data = [
    [
        "namaPembeli" => "Al Ikhsan",
        "member" => "ya",
        "totalBelanja" => 500000
    ],
    [
        "namaPembeli" => "Budi",
        "member" => "tidak",
        "totalBelanja" => 120000
    ]
];

echo "<h2>TRANSAKSI 1</h2>";

$error1 = [];

$nama = $data[0]["namaPembeli"];
$member = $data[0]["member"];
$total = $data[0]["totalBelanja"];

if (empty($nama))
    $error1[] = "Nama pembeli tidak boleh kosong";

if (empty($member))
    $error1[] = "Status member harus diisi";

if ($total <= 0)
    $error1[] = "Total belanja harus lebih dari 0";

if (!empty($error1)) {
    foreach ($error1 as $error) {
        echo $error . "<br>";
    }
} else {

    $belanja1 = new Belanja();
    $belanja1->namaPembeli = $nama;
    $belanja1->member = $member;
    $belanja1->totalBelanja = $total;

    echo "Nama Pembeli : " . $belanja1->namaPembeli . "<br>";
    echo "Status Member : " . $belanja1->statusMember() . "<br>";
    echo "Total Belanja : " . formatRupiah($belanja1->totalBelanja) . "<br>";
    echo "Diskon : " . formatRupiah($belanja1->diskon()) . "<br>";
    echo "<b>Total Bayar : " . formatRupiah($belanja1->totalBayar()) . "</b><br>";
}


echo "<h2>TRANSAKSI 2</h2>";

$error2 = [];

$nama = $data[1]["namaPembeli"];
$member = $data[1]["member"];
$total = $data[1]["totalBelanja"];

if (empty($nama))
    $error2[] = "Nama pembeli tidak boleh kosong";

if (empty($member))
    $error2[] = "Status member harus diisi";

if ($total <= 0)
    $error2[] = "Total belanja harus lebih dari 0";

if (!empty($error2)) {
    foreach ($error2 as $error) {
        echo $error . "<br>";
    }
} else {

    $belanja2 = new Belanja();
    $belanja2->namaPembeli = $nama;
    $belanja2->member = $member;
    $belanja2->totalBelanja = $total;

    echo "Nama Pembeli : " . $belanja2->namaPembeli . "<br>";
    echo "Status Member : " . $belanja2->statusMember() . "<br>";
    echo "Total Belanja : " . formatRupiah($belanja2->totalBelanja) . "<br>";
    echo "Diskon : " . formatRupiah($belanja2->diskon()) . "<br>";
    echo "<b>Total Bayar : " . formatRupiah($belanja2->totalBayar()) . "</b><br>";
}

?>