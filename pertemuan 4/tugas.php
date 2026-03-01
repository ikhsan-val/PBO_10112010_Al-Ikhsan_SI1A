<?php
        class nilai{
            public $nama;
            public $kelas;
            public $matkul;
            public $nilai;
            public $status;
            
            public function status($nilai){
                if($nilai <= 60){
                    return "lulus";
                }else{
                    return "tidak lulus";
                }
            }
        }
        $data = [
            'namaMaha'=>["ikhsan","ismi","icy","asep"],
            'kelas'=>"si 2",
            'matkul'=>"PBO",
            'nilai'=>["90","75","60","30"]
        ];

        $nil = new nilai();
        $nil->nama = $data['namaMaha'];
        $nil->kelas = $data['kelas'];
        $nil->matkul = $data['matkul'];
        $nil->nilai = $data["nilai"];

        for($x = 0;$x < count($data['namaMaha']); $x++){
            echo "Nama: ".$nil->nama[$x]."<br>";
            echo "Kelas: ".$nil->kelas."<br>";
            echo "Kelas: ".$nil->matkul."<br>";
            echo "Nilai: ".$nil->nilai[$x]."<br>";
            echo "Status: ".$nil->status($nil->nilai[$x])."<br><br>";
        }
    ?>