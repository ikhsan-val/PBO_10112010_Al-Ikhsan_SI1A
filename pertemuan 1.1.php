<?php
class belanja{
    var $jumlah = 4;
    var $hargasatuan = 1000;
    var $namaBarang ="penghapus";
      public function totalHarga(): float
{
    $subTotal = $this->jumlah * $this->hargasatuan;
    return $subTotal;
}
}
?>