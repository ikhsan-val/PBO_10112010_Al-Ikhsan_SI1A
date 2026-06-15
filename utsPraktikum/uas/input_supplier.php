<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Tambah Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>UAS PRAKTIKUM PBO</h1>
        <h2>Tambah Data Supplier Baru</h2>
    </div>
    
    <div class="container">
        <br>
        <a href="index.php" class="tombol">← Kembali</a>
        <br><br>
        
        <h3>Input Data Supplier</h3>
        <form action="input_supplier_aksi.php" method="post">
            <table class="table" style="max-width: 500px;">
                <tr>
                    <td>Nama Supplier</td>
                    <td><input type="text" name="nama_supplier" required placeholder="Masukkan nama supplier..."></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat_supplier" required placeholder="Masukkan alamat..."></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telepon_supplier" required placeholder="Masukkan no telepon..."></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email_supplier" required placeholder="Masukkan email..."></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Supplier" class="tombol" style="cursor:pointer; background:#9fd6d9; padding: 5px 12px; border-radius:4px;"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>