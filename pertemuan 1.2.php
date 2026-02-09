<?php
class belanja{//ini adalah class belanja
    public string $namaPembeli="ikhsan";
    public string $namaBarang="snack";
    public int $hargaBarang = 1000;
      public int $jumlahBayar = 4;
      public float $totalBayar;
      public float $diskon =0.5;
      public static float $pajak=0.02;
      public function
      __construct($namaPembeli)
      {
        $this->namaPembeli=$namaPembeli;
      }
      public function hitungTotal(): float
{
    $subTotal = $this->hargaBarang * $this->jumlahBayar;
    return $subTotal;
}
 public function hargaDiskon(): float
{
    $subdiskon = $this->hitungTotal() * $this->diskon;
    return $subdiskon;
}
 public function Total(): float
{
    $total = $this->hitungTotal() - $this->hargaDiskon();
    return $total;
}
      public function
      tampilRincian($namaPembeli)
      {
        echo "Nama Pembeli:".
        $this->namaPembeli."<br>";
         echo "Nama Barang:".
        $this->namaBarang."<br>";
         echo "Harga Barang:".
        $this->hargaBarang."<br>";
         echo "Jumlah bayar:".
        $this->jumlahBayar."<br>";
         echo "Sub Total:".
        $this->hitungTotal()."<br>";
         echo "harga diskon:".
        $this->hargaDiskon()."<br>";
         echo "Total Bayar:".
        $this->Total()."<br>";
      }
}
$belanja1=new belanja("ikhsan");
$belanja1->tampilRincian($belanja1->namaPembeli)
?>
