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

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>No</th><th>Nama</th><th>Member</th><th>Diskon</th><th>Total Bayar</th></tr>";

$no = 1;

foreach($data as $d) {

    $belanja1 = new Belanja();

    $belanja1->namaPembeli = $d["namaPembeli"];
    $belanja1->member = $d["member"];
    $belanja1->totalBelanja = $d["totalBelanja"];

    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$belanja1->namaPembeli."</td>";
    echo "<td>".($belanja1->member == "ya" ? "YA" : "TIDAK")."</td>";
    echo "<td>".formatRupiah($belanja1->diskon())."</td>";
    echo "<td>".formatRupiah($belanja1->totalBayar())."</td>";
    echo "</tr>";

    $no++;
}

echo "</table>";

?>