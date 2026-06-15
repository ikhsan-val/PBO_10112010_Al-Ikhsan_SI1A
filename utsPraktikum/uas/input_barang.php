<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>UAS PRAKTIKUM PBO</h1>
        <h2>Tambah Data Barang Baru</h2>
    </div>
    
    <div class="container">
        <br>
        <a href="index.php" class="tombol">← Kembali</a>
        <br><br>
        
        <h3>Input Data Barang</h3>
        <form action="input_barang_aksi.php" method="post">
            <table class="table" style="max-width: 500px;">
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang" required placeholder="Masukkan nama barang..."></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="number" name="stok" required placeholder="0"></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="number" name="harga_beli" required placeholder="0"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="number" name="harga_jual" required placeholder="0"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Barang" class="tombol" style="cursor:pointer; background:#9fd6d9; padding: 5px 12px; border-radius:4px;"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>