<?php
        include('../js/config.php');
        $id_anggota = @$_GET['id'];
        $nama	= $_POST['nama'];
        $kelas = $_POST['kelas'];
        $telp = $_POST['telp'];

        $sql = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', kelas='$kelas', telp='$telp' WHERE id_anggota='$id_anggota'");

        if($sql){
            echo '<script>alert("Berhasil menyimpan data"); document.location="member.php?id='.$id_anggota.'";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
        //header('location:tampil_buku.php');
?>
