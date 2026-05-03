<?php
class Manusia {
    // Properti
    protected $nama = "Ardi";
    var $kelas = "SI 2"; 

   
    protected function nama() {
        return "Nama : " . $this->nama;
    }

    
    public function tampilkan_nama() {
        return $this->nama(); 
    }

  protected function tampilkan_kelas() {
return "Kelas: " . $this->kelas;
}
} 

// Instansiasi
$manusia = new Manusia();

// Memanggil method
echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas(); 
?>