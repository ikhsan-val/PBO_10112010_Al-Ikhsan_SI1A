<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PRAKTIKUM - Tambah User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>UAS PRAKTIKUM PBO</h1>
        <h2>Tambah Data User Baru</h2>
    </div>
    
    <div class="container">
        <br>
        <a href="index.php" class="tombol">← Kembali ke Halaman Utama</a>
        <br><br>
        
        <h3>Input Data User</h3>
        <form action="input-aksi.php" method="post">
            <table class="table" style="max-width: 500px;">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required placeholder="Masukkan username..."></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required placeholder="Masukkan password..."></td>
                </tr>
                <tr>
                    <td>Tipe User</td>
                    <td>
                        <select name="tipe_user" style="width: 100%; padding: 4px;">
                            <option value="admin">Admin</option>
                            <option value="suplier">Supplier</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data" class="tombol" style="cursor:pointer; background:#9fd6d9; padding: 5px 12px; border-radius:4px;"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>