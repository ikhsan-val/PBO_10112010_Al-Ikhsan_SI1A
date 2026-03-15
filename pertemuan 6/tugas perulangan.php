<?php

class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    function hitungVolume(){

        if($this->jenis == "Bola"){
            return (4/3) * pi() * pow($this->jari,3);
        }

        elseif($this->jenis == "Kerucut"){
            return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
        }

        elseif($this->jenis == "Limas Segi Empat"){
            return (1/3) * pow($this->sisi,2) * $this->tinggi;
        }

        elseif($this->jenis == "Kubus"){
            return pow($this->sisi,3);
        }

        elseif($this->jenis == "Tabung"){
            return pi() * pow($this->jari,2) * $this->tinggi;
        }

        else{
            return 0;
        }

    }

}

$data = [

    ["jenis"=>"Bola","sisi"=>0,"jari"=>7,"tinggi"=>0],
    ["jenis"=>"Kerucut","sisi"=>0,"jari"=>14,"tinggi"=>10],
    ["jenis"=>"Limas Segi Empat","sisi"=>8,"jari"=>0,"tinggi"=>24],
    ["jenis"=>"Kubus","sisi"=>30,"jari"=>0,"tinggi"=>0],
    ["jenis"=>"Tabung","sisi"=>0,"jari"=>7,"tinggi"=>10]

];

echo "<table border='1' cellpadding='8'>";
echo "<tr>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>";

foreach($data as $d){

    $bangun = new BangunRuang();

    $bangun->jenis = $d["jenis"];
    $bangun->sisi = $d["sisi"];
    $bangun->jari = $d["jari"];
    $bangun->tinggi = $d["tinggi"];

    echo "<tr>";
    echo "<td>".$bangun->jenis."</td>";
    echo "<td>".$bangun->sisi."</td>";
    echo "<td>".$bangun->jari."</td>";
    echo "<td>".$bangun->tinggi."</td>";
    echo "<td>".$bangun->hitungVolume()."</td>";
    echo "</tr>";
}

echo "</table>";

?>