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
        function statusSubsisdi()
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
$objectkendaraan = new KENDARAAN();
echo "jumlahroda =".$objectkendaraan->jumlahroda. "<br/>";
echo "status harga=". $objectkendaraan->statusHarga()."<br/>" ;
echo "status subsidi=". $objectkendaraan->statusSubsisdi()."<br/>";
?>