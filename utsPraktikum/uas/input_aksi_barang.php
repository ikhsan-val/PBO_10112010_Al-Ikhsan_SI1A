<?php
include "koneksi.php";

$nama_barang = $_POST['nama_barang'];
$stok        = $_POST['stok'];
$harga_beli  = $_POST['harga_beli'];
$harga_jual  = $_POST['harga_jual'];

$query = mysqli_query($koneksi, "INSERT INTO tb_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')");

if($query) {
    header("location:index.php?pesan=input");
} else {
    echo "Gagal menyimpan data barang.";
}
?>