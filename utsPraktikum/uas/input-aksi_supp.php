<?php
include "koneksi.php";

$nama_supplier    = $_POST['nama_supplier'];
$alamat_supplier  = $_POST['alamat_supplier'];
$telepon_supplier = $_POST['telepon_supplier'];
$email_supplier   = $_POST['email_supplier'];

$query = mysqli_query($koneksi, "INSERT INTO tb_supplier (nama_supplier, alamat_supplier, telepon_supplier, email_supplier) VALUES ('$nama_supplier', '$alamat_supplier', '$telepon_supplier', '$email_supplier')");

if($query) {
    header("location:index.php?pesan=input");
} else {
    echo "Gagal menyimpan data supplier.";
}
?>