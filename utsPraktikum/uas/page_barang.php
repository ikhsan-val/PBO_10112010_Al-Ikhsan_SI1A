<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master - Barang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* =========================================================
           KUNCI PERBAIKAN: Memaksa Dropdown Melayang & Tidak Tabrakan
           ========================================================= */
        .menu {
            position: relative;
            z-index: 9999;
            overflow: visible !important; /* Memaksa menu keluar dari boks */
        }
        
        .menu .container {
            overflow: visible !important; /* Mencegah menu terpotong */
        }

        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: block; /* Kembalikan ke block default */
        }

        .menu ul > li {
            position: relative;
            display: inline-block; /* Membuat menu utama berjejer ke samping */
        }

        /* Styling Boks Dropdown Anak */
        .menu ul li ul {
            display: none; /* Sembunyikan dulu */
            position: absolute; /* Membuatnya melayang di atas tabel */
            top: 100%;
            left: 0;
            background-color: #9fd6d9;
            min-width: 200px;
            border: 1px solid #8ec8cb;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.15);
            padding: 0;
            z-index: 10000;
        }

        /* Mengatur isi list di dalam dropdown */
        .menu ul li ul li {
            display: block; /* Berjejer ke bawah */
            width: 100%;
            border-bottom: 1px solid #8ec8cb;
        }

        .menu ul li ul li a {
            display: block;
            padding: 10px 15px;
            color: #183b3f;
            text-decoration: none;
        }

        .menu ul li ul li a:hover {
            background-color: #8ec8cb;
        }

        /* EFEK HOVER: Ketika didekati mouse, tunjukkan sub-menu */
        .menu ul li:hover > ul {
            display: block;
        }

        /* Jarak aman tabel di bawah agar tidak terlalu mepet */
        .konten-tabel {
            margin-top: 25px;
            position: relative;
            z-index: 1; /* Lapisan tabel berada di bawah navbar */
        }
    </style>
</head>
<body>

<div class="judul">
    <h1>MANAGEMENT DATA BARANG</h1>
</div>

<div class="menu">
    <div class="container">
        <ul>
            <li>
                <a href="#" style="font-weight: bold; padding: 12px 20px; display: inline-block; color: #183b3f; text-decoration: none;">
                    Menu Data Master ▼
                </a>
                <ul>
                    <li><a href="index.php">← Kembali ke Dashboard</a></li>
                    <li><a href="page_user.php">Data User</a></li>
                    <li><a href="page_barang.php" style="background: #8ec8cb;">Data Barang</a></li>
                    <li><a href="page_supplier.php">Data Supplier</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="container konten-tabel">
    <a href="input_barang.php" class="tombol">+ Tambah Barang Baru</a>
    
    <h3>Tabel Konten Barang</h3>
    <table class="table" border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
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