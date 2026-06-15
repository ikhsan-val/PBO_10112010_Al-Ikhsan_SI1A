<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>UAS PRAKTIKUM PBO</h1>
        <h2>Edit Data Barang</h2>
    </div>

    <div class="container">
        <br>
        <a href="index.php" class="tombol">← Kembali</a>
        <br><br>
        
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE kd_barang='$id'");
        while($data = mysqli_fetch_array($query_mysqli)){
        ?>
        <form action="update_barang.php" method="post">
            <table class="table" style="max-width: 500px;">
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input type="hidden" name="kd_barang" value="<?php echo $data['kd_barang']?>">
                        <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" value="<?php echo $data['stok']?>" required></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="number" name="harga_beli" value="<?php echo $data['harga_beli']?>" required></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="number" name="harga_jual" value="<?php echo $data['harga_jual']?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Perubahan" class="tombol" style="cursor:pointer; background:#9fd6d9; padding: 5px 10px; border-radius:4px;"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>