<?php
include "koneksi.php";

$id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$tipe_user = $_POST['tipe_user'];

// Query untuk mengupdate data user berdasarkan id_user
$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', tipe_user='$tipe_user' WHERE id_user='$id'");

if($query){
    header("location:index.php?pesan=update");
} else {
    echo "Gagal mengupdate data.";
}
?>