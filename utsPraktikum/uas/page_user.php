<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master - User</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS Dropdown agar melayang aman di atas tabel */
        .menu ul li { position: relative; display: inline-block; }
        .menu ul li ul { display: none; position: absolute; background-color: #9fd6d9; min-width: 180px; z-index: 9999; top: 100%; left: 0; border: 1px solid #8ec8cb; }
        .menu ul li:hover > ul { display: block; }
        .menu ul li ul li { display: block; }
    </style>
</head>
<body>

<div class="judul">
    <h1>MANAGEMENT DATA USER</h1>
</div>

<div class="menu">
    <div class="container">
        <ul>
            <li>
                <a href="#" style="font-weight: bold;">Menu Data Master ▼</a>
                <ul>
                    <li><a href="index.php">← Kembali ke Dashboard</a></li>
                    <li><a href="page_user.php">Data User</a></li>
                    <li><a href="page_barang.php">Data Barang</a></li>
                    <li><a href="page_supplier.php">Data Supplier</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <br>
    <a href="input.php" class="tombol">+ Tambah User Baru</a>
    <h3>Tabel Konten User</h3>
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
</div>

</body>
</html>