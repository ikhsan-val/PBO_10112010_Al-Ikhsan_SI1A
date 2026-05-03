<?php
function formatRupiah($jumlah) {
    return "Rp " . number_format($jumlah, 0, ',', '.');
}

class Tabungan {
    protected $saldo;

    public function __construct($saldoawal) {
        $this->saldo = $saldoawal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
    }

    public function tarik($jumlah) {
        if ($jumlah > 0 && $this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
            return "Transaksi Sukses";
        } else {
            return "Saldo tidak mencukupi";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class Siswa extends Tabungan {
    private $nama;

    public function __construct($nama, $saldoAwal) {
        parent::__construct($saldoAwal);
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function tampilkanInfo() {
        echo "\n------------------------\n";
        echo "Nama  : {$this->nama}\n";
        echo "Saldo : " . formatRupiah($this->saldo) . "\n";
        echo "------------------------\n";
    }
}

// DATA SISWA (ARRAY)
$daftarSiswa = [
    new Siswa("ikhsan", 1000000),
    new Siswa("Budi", 500000),
    new Siswa("Santodo", 750000)
];

while (true) {
    echo "\n=== LOGIN SISWA ===\n";
    foreach ($daftarSiswa as $key => $s) {
        echo ($key + 1) . ". " . $s->getNama() . "\n";
    }
    echo "0. Keluar\n";
    echo "Pilih login: ";

    $pilih = trim(fgets(STDIN));

    if ($pilih == "0") break;

    $idx = (int)$pilih - 1;

    if (!isset($daftarSiswa[$idx])) {
        echo "Pilihan tidak valid!\n";
        continue;
    }

    // LOGIN BERHASIL → hanya akses dirinya sendiri
    $user = $daftarSiswa[$idx];

    while (true) {
        echo "\n=== MENU {$user->getNama()} ===\n";
        echo "1. Lihat Saldo\n";
        echo "2. Setor\n";
        echo "3. Tarik\n";
        echo "4. Logout\n";
        echo "Pilih menu: ";

        $menu = trim(fgets(STDIN));

        if ($menu == "1") {
            $user->tampilkanInfo();

        } elseif ($menu == "2") {
            echo "Jumlah setor: ";
            $jumlah = (int) trim(fgets(STDIN));
            $user->setor($jumlah);
            echo "Setor berhasil!\n";

        } elseif ($menu == "3") {
            echo "Jumlah tarik: ";
            $jumlah = (int) trim(fgets(STDIN));
            echo $user->tarik($jumlah) . "\n";

        } elseif ($menu == "4") {
            break; // logout

        } else {
            echo "Menu tidak valid!\n";
        }
    }

    // SIMPAN KE FILE (fopen)
    $file = fopen("data_tabungan.txt", "w");
    foreach ($daftarSiswa as $s) {
        fwrite($file, $s->getNama() . "|" . $s->getSaldo() . PHP_EOL);
    }
    fclose($file);

    // BACA FILE (fgets)
    echo "\n=== DATA TERSIMPAN ===\n";
    $file = fopen("data_tabungan.txt", "r");
    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
}
?>