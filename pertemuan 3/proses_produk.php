<?php 
class produk {
    public $nama;
    public $harga;
    
public function statusharga()
{
    if($this->harga>10000)
        {
        return "harga mahal";
}
    else {
       return "harga terjangkau";
}
}
}
$produk1=new produk();
$nama = htmlspecialchars($_POST ['nama']);
$harga = htmlspecialchars($_POST ['harga']);
$produk1->harga =$harga;
$produk1->nama = $nama;
$produk1->statusharga();

echo "<h2> Data Produk</h2>";
echo "nama produk : ".$produk1->nama. "<br>";
echo "harga :Rp.  ". $produk1->harga. "<br>";
echo "status :".$produk1->statusharga();
?>