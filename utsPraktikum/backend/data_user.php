<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
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
        <h3>Data User</h3>
        <a href="input_user.php" class="tombol-aksi">+ Tambah User</a>
    </div>

        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM user");
        $nomor = 1;
        $ada_data = false;
        while($data = mysqli_fetch_array($query_mysql)){
            $ada_data = true;
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo htmlspecialchars($data['username']); ?></td>
            <td><?php echo htmlspecialchars($data['password']); ?></td>
            <td><?php echo htmlspecialchars($data['tipe_user']); ?></td>
            <td>
                <a href="update_user.php?id=<?= $data['id_user'] ?>" class="edit">Edit</a>
                |
                <a href="hapus_user.php?id=<?= $data['id_user'] ?>" class="hapus"
                   onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        <?php if(!$ada_data): ?>
        <tr><td colspan="6" style="text-align:center; color:#888;">Belum ada data user.</td></tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>