<?php
$data = [
["nama"=>"Ikhsan", "nilai"=>80],
["nama"=>"Haikal", "nilai"=>75],
["nama"=>"Awam", "nilai"=>70]
];
echo "<table border='60'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";
foreach($data as $d) {
echo "<tr>";
echo "<td>".$d["nama"]."</td>";
echo "<td>".$d["nilai"]."</td>";
echo "</tr>";
}
echo "</table>";
?>