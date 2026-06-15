<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="judul">
    <h1>UAS PRAKTIKUM PBO</h1>
    <h2>Dashboard Master Data</h2>
</div>

<div class="menu">
    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
        <span style="font-weight: bold; color: #183b3f;">Pindah Halaman Navigasi:</span> 
        <a href="page_user.php" style="margin-left: 15px; color: #24bb2; text-decoration: none; font-weight: bold;"> User </a>
        <a href="page_barang.php" style="margin-left: 15px; color: #245bb2; text-decoration: none; font-weight: bold;">data Barang </a>
        <a href="page_supplier.php" style="margin-left: 15px; color: #245bb2; text-decoration: none; font-weight: bold;">data Supplier </a>
    </div>
</div>

<div class="container">
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input") echo "<p style='color: green; font-weight: bold;'>Data berhasil di-input</p>";
        if($pesan == "update") echo "<p style='color: green; font-weight: bold;'>Data berhasil di-update</p>";
        if($pesan == "delete") echo "<p style='color: green; font-weight: bold;'>Data berhasil di-hapus</p>";
    }
    ?>

    <br>
    <h3></h3>
    <table class="table" border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tipe User</th>
            <th>Opsi</th>
        </tr>
        <?php include "../backend/data_user.php"; ?>
    </table> 

    <h3></h3>
    <table class="table" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>
        <?php include "../backend/data_supplier.php"; ?>
    </table> 

    <h3></h3>
    <table class="table" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Opsi</th>
        </tr>
        <?php include "../backend/data_barang.php"; ?>
    </table>
</div>

</body>
</html>