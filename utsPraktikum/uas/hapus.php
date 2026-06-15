<?php
include 'koneksi.php';

$id = $_GET['id'];

// Eksekusi hapus data
mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");

// Mengarahkan kembali dengan parameter pesan=delete agar memicu notifikasi hijau
header("location:index.php?pesan=delete");
?>