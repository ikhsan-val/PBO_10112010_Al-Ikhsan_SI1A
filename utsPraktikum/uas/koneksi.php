<?php
try{
$host = "localhost";
$username = "root";
$password = "";
$database = "inventory";

$koneksi = mysqli_connect($host, $username, $password, $database);
}

catch(Exception $e){
    echo "message: ".$e->getMessage();
}
?>