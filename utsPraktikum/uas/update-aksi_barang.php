<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "update tb_barang SET nama_barang='', stok='', harga_beli='', harga_jual='' WHERE id_barang='$id'");

header("location:index.php?pesan=update");
?>