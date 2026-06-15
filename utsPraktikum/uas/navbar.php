<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>
<body>

<div class="judul">
    <h1>UAS PRAKTIKUM PBO</h1>
    <h2>TANGGAL: <?= date('d F Y'); ?></h2>
</div>

<div class="menu">
    <div class="container" style="padding-top: 0; padding-bottom: 0;">
        <ul>
            <li>
                <a href="../backend/data_barang.php">Data Master</a>
                <ul>
                    <li><a href="../backend/data_user.php">Data User</a></li>
                    <li><a href="../backend/data_barang.php">Data Barang</a></li>
                    <li><a href="../backend/data_supplier.php">Data Pemasok</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Data Transaksi</a>
                <ul>
                    <li><a href="#">Data Pembelian</a></li>
                    <li><a href="#">Data Penjualan</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Laporan</a>
                <ul>
                    <li><a href="#" target="_blank">Laporan Stok</a></li>
                    <li><a href="#">Laporan Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
