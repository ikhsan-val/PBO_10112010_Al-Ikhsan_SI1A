<?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "data berhasil di input";
        }else if($pesan == "update"){
            echo "data berhasi; di update";
        }else if($pesan == "delete"){
            echo "data berhasil di hapus";
        }
    }
    ?>

   
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "select * from tv_customer")or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['tipe_user']; ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id_user'] ?>" class="edit"> Edit</a>
                |
                <a href="hapus.php?id=<?= $data['id_user'] ?>" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php }?>
    </table>