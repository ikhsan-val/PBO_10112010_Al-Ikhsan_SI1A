<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "update tb_supplier SET nama_supplier='', alamat_supplier='', telepon_supplier='', email_supplier='' WHERE id_supplier='$id'");

header("location:index.php?pesan=update");
?>