<?php
ini_set('display_errors', 1); // Diperbaiki dari display_error
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include "koneksi.php";

$nama    = $_POST['username'];
$alamat  = $_POST['password'];
$pekerja = $_POST['tipe_user'];

$query = mysqli_query($koneksi, "INSERT INTO user (username, password, tipe_user) VALUES ('$nama', '$alamat', '$pekerja')");

if($query) {
    header("location:index.php?pesan=input");
} else {
    echo "Gagal menyimpan data baru.";
}
?>