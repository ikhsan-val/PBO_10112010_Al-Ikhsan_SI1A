<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Edit Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>UAS PRAKTIKUM PBO</h1>
        <h2>Edit Data Supplier</h2>
    </div>

    <div class="container">
        <br>
        <a href="index.php" class="tombol">← Kembali</a>
        <br><br>
        
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_supplier WHERE id_supplier='$id'");
        while($data = mysqli_fetch_array($query_mysqli)){
        ?>
        <form action="update_supplier.php" method="post">
            <table class="table" style="max-width: 500px;">
                <tr>
                    <td>Nama Supplier</td>
                    <td>
                        <input type="hidden" name="id_supplier" value="<?php echo $data['id_supplier']?>">
                        <input type="text" name="nama_supplier" value="<?php echo $data['nama_supplier']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat_supplier" value="<?php echo $data['alamat_supplier']?>" required></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telepon_supplier" value="<?php echo $data['telepon_supplier']?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email_supplier" value="<?php echo $data['email_supplier']?>" required></td>
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