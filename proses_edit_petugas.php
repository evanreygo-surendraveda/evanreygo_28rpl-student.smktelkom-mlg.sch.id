<?php
        include('../js/config.php');
        $id_petugas = @$_GET['id'];
        $nama_petugas	= $_POST['nama_petugas'];
        $telp = $_POST['telp'];

        $sql = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas', telp='$telp' WHERE id_petugas='$id_petugas'");

        if($sql){
            echo '<script>alert("Berhasil menyimpan data"); document.location="petugas.php?id='.$id_anggota.'";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data</div>';
        }
        //header('location:tampil_buku.php');
?>
