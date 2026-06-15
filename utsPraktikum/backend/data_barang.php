<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<div class="container">
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "<p class='notif success'>✅ Data berhasil diinput.</p>";
        } elseif($pesan == "update"){
            echo "<p class='notif success'>✅ Data berhasil diupdate.</p>";
        } elseif($pesan == "delete"){
            echo "<p class='notif success'>✅ Data berhasil dihapus.</p>";
        }
    }
    ?>

    <div style="display:flex; justify-content:space-between; align-items:center; margin: 16px 0 10px;">
        <h3>Data Barang</h3>
        <a href="input_barang.php" class="tombol-aksi">+ Tambah Barang</a>
    </div>

        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
        $nomor = 1;
        $ada_data = false;
        while($data = mysqli_fetch_array($query_mysql)){
            $ada_data = true;
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo htmlspecialchars($data['nama_barang']); ?></td>
            <td><?php echo htmlspecialchars($data['stok']); ?></td>
            <td>Rp <?php echo number_format($data['harga_beli'], 0, ',', '.'); ?></td>
            <td>Rp <?php echo number_format($data['harga_jual'], 0, ',', '.'); ?></td>
            <td>
                <a href="edit_barang.php?id=<?= $data['kd_barang'] ?>" class="edit">Edit</a>
                |
                <a href="hapus_barang.php?id=<?= $data['kd_barang'] ?>" class="hapus"
                   onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        <?php if(!$ada_data): ?>
        <tr><td colspan="6" style="text-align:center; color:#888;">Belum ada data barang.</td></tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>