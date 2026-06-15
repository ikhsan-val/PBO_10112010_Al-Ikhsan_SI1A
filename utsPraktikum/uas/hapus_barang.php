<?php
include 'koneksi.php';

$id = $_GET['id'];

// 1. Hapus terlebih dahulu data di tabel anak (detail_pembelian) yang memakai kd_barang ini
mysqli_query($koneksi, "DELETE FROM detail_pembelian WHERE kd_barang='$id'");

// 2. Baru hapus data utama di tabel induk (tb_barang)
mysqli_query($koneksi, "DELETE FROM tb_barang WHERE kd_barang='$id'");

// Kembalikan ke halaman utama dengan pesan delete
header("location:index.php?pesan=delete");
?>