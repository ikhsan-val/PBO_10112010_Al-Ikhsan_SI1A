<?php 
 class KENDARAAN
{
    public $jumlahroda=4;
    public $warna;
    public $bahanbakar="premium";
    public $harga=1000000000000;
     public $merk;
    public $tahunpembuatan=2004;
        public function statusHarga()
    {
            if($this->harga>50000000000)
                {
                    $status = "Harga Kendaraan Mahal";
                }
            else 
                {
                    $status = "Harga kendraan murah";
                }
                return $status ;
    }
        function statusSubsidi()
        {
                if ($this->tahunpembuatan<2005 && $this->bahanbakar ="premium")
                    {
                    $status = "DAPAT SUBSIDI";
                    }
                else 
                    {
                    $status = "dapat subsidi";
                    }
                    return $status  ;       
         }
    }
$objekKendaraan = new KENDARAAN();
echo "jumlahroda =".$objekKendaraan->jumlahroda. "<br/>";
echo "status harga=". $objekKendaraan->statusHarga()."<br/>" ;
echo "status subsidi=". $objekKendaraan->statusSubsidi()."<br/>";


$objekKendaraan1 =new KENDARAAN();
$objekKendaraan1->harga=10000000;
$objekKendaraan1->tahunPembuatan=2004;
echo "kendaraan1 <br>";
echo "status harga = ".$objekKendaraan1->statusHarga();

$objekKendaraan2 = new KENDARAAN();
$objekKendaraan2->bahanBakar = "pertamax";
$objekKendaraan2->tahunPembuatan =1999;
echo "<br>kendaraan2";
echo "<br>";
echo "status BBM = ".$objekKendaraan2->statusSubsidi()."<br>";
?>