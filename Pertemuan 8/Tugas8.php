<?php

class Karyawan {
    private string $nama;
    private string $golongan;
    private int $jamLembur;

    // Constructor dengan parameter
    public function __construct(string $nama, string $golongan, int $jamLembur) {
        $this->nama      = $nama;
        $this->golongan  = $golongan;
        $this->jamLembur = $jamLembur;
    }

    // Destructor - unset objek
    public function __destruct() {
        echo "Objek karyawan '{$this->nama}' telah dihapus dari memori.\n";
    }

    // Getter
    public function getNama(): string{
         return $this->nama; }

    public function getGolongan(): string { 
        return $this->golongan; }

    public function getJamLembur(): int { 
        return $this->jamLembur; }

    //buat update data 
    public function setNama(string $nama): void{ 
        $this->nama = $nama; }

    public function setGolongan(string $golongan): void{ 
        $this->golongan = $golongan; }

    public function setJamLembur(int $jam): void{ 
        $this->jamLembur = $jam; }

    // Method getGajiPokok berdasarkan golongan
    public function getGajiPokok(): int {
        $tabel = [
            "Ib"  => 1250000, "Ic"  => 1300000, "Id"  => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa"=> 2400000, "IIIb"=> 2500000, "IIIc"=> 2600000, "IIId"=> 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000,
        ];
        return $tabel[$this->golongan] ?? 0;
    }

    // Total gaji = gaji pokok + (jam lembur * 15000)
    public function getTotalGaji(): int {
        return $this->getGajiPokok() + ($this->jamLembur * 15000);
    }

    // Format total gaji ke Rupiah
    public function getTotalGajiFormatted(): string {
        return "Rp" . number_format($this->getTotalGaji(), 0, ',', '.');
    }
}


// ========================
//   MANAJEMEN DATA (CRUD)
// ========================

$dataKaryawan = [
    new Karyawan("Winny",  "IIb",  30),
    new Karyawan("Stendy", "IIIc", 32),
    new Karyawan("Alfred", "IVb",  30),
];

// ---- Fungsi Tampilkan Data ----
function tampilkanData(array $data): void {
    echo "\n===== DATA GAJI KARYAWAN =====\n";
    echo str_pad("No", 4) . "| " .
         str_pad("Nama", 10) . "| " .
         str_pad("Golongan", 10) . "| " .
         str_pad("Jam Lembur", 12) . "| Total Gaji\n";

    foreach ($data as $i => $k) {
        echo str_pad($i + 1, 4) . "| " .
             str_pad($k->getNama(), 10) . "| " .
             str_pad($k->getGolongan(), 10) . "| " .
             str_pad($k->getJamLembur(), 12) . "| " .
             $k->getTotalGajiFormatted() . "\n";
    }
    echo "\n";
}

// ---- Fungsi Tambah Data ----
function tambahData(array &$data): void {
    echo "\n--- Tambah Data Karyawan ---\n";
    echo "Nama       : "; $nama = trim(fgets(STDIN));
    echo "Golongan   : "; $gol  = trim(fgets(STDIN));
    echo "Jam Lembur : "; $jam  = (int) trim(fgets(STDIN));

    $data[] = new Karyawan($nama, $gol, $jam);
    echo "Data berhasil ditambahkan!\n";
}

// ---- Fungsi Update Data ----
function updateData(array &$data): void {
    tampilkanData($data);
    echo "Pilih nomor karyawan yang diupdate: ";
    $no = (int) trim(fgets(STDIN)) - 1;

    if (!isset($data[$no])) { echo "Data tidak ditemukan!\n"; return; }

    echo "Nama baru (kosong = skip)       : "; $nama = trim(fgets(STDIN));
    echo "Golongan baru (kosong = skip)   : "; $gol  = trim(fgets(STDIN));
    echo "Jam Lembur baru (0 = skip)      : "; $jam  = (int) trim(fgets(STDIN));

    if ($nama !== "") $data[$no]->setNama($nama);
    if ($gol  !== "") $data[$no]->setGolongan($gol);
    if ($jam  > 0)    $data[$no]->setJamLembur($jam);

    echo "Data berhasil diupdate!\n";
}

// ---- Fungsi Hapus Data ----
function hapusData(array &$data): void {
    tampilkanData($data);
    echo "Pilih nomor karyawan yang dihapus: ";
    $no = (int) trim(fgets(STDIN)) - 1;

    if (!isset($data[$no])) { echo "Data tidak ditemukan!\n"; return; }

    $nama = $data[$no]->getNama();
    unset($data[$no]);           // destructor dipanggil di sini
    $data = array_values($data); // reindex
    echo "Data karyawan '$nama' berhasil dihapus!\n";
}


// ========================
//        MENU UTAMA
// ========================

do {
    echo "\n====== MENU GAJI KARYAWAN ======\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $pilihan = (int) trim(fgets(STDIN));

    switch ($pilihan) {
        case 1: tampilkanData($dataKaryawan);        break;
        case 2: tambahData($dataKaryawan);           break;
        case 3: updateData($dataKaryawan);           break;
        case 4: hapusData($dataKaryawan);            break;
        case 5: echo "Terima kasih, sampai jumpa!\n"; break;
        default: echo "Menu tidak valid, coba lagi.\n";
    }

} while ($pilihan !== 5);