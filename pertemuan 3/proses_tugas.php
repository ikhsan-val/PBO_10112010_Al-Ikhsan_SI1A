<?php
{

        class Pegadaian {
            
            public $pinjaman;
            public $bungaPersen;
            public $bulan;
            public $telatHari;
            private $dendaPerHari = 0.0015;


            public function __construct($p, $b, $bln, $t) {
                $this->pinjaman = $p;
                $this->bungaPersen = $b;
                $this->bulan = $bln;
                $this->telatHari = $t;
            }

            public function hitungTotalPinjaman() {
                return $this->pinjaman + ($this->pinjaman * ($this->bungaPersen / 100));
            }

            public function hitungAngsuran() {
                return $this->hitungTotalPinjaman() / $this->bulan;
            }

            public function hitungDenda() {
                return $this->hitungAngsuran() * $this->dendaPerHari * $this->telatHari;
            }

            public function hitungTotalPembayaran() {
                return $this->hitungAngsuran() + $this->hitungDenda();
            }
        }

    
        $hitungHutang = new Pegadaian($_POST['p'], $_POST['bnga'], $_POST['blan'], $_POST['tlat']);

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Total Pinjaman: Rp. " . number_format($hitungHutang->hitungTotalPinjaman(), 0, ',', '.') . "<br>";
        echo "Besaran Angsuran: Rp. " . number_format($hitungHutang->hitungAngsuran(), 0, ',', '.') . "<br>";
        echo "Denda Keterlambatan ($hitungHutang->telatHari Hari): Rp. " . number_format($hitungHutang->hitungDenda(), 0, ',', '.') . "<br>";
        echo "<strong>Total Pembayaran: Rp. " . number_format($hitungHutang->hitungTotalPembayaran(), 0, ',', '.') . "</strong>";

        //itu number format saya cari di internet, biar formatnya ga (10000), tapi jadi ada titik atau koma kalau desimal, terus strong biar menunjukan kalo itu penting, jadi dia bold sendiri
        
    }
    ?>