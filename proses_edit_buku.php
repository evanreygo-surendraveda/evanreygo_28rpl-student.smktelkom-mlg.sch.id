<?php
        include('../js/config.php');
        $id_buku = @$_GET['id'];
        $judul	= $_POST['judul'];
        $penerbit	= $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $ringkasan = $_POST['ringkasan'];
        $cover = $_POST['cover'];
        $stok = $_POST['stok'];
        $id_kategori = $_POST['id_kategori'];

        $sql = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', ringkasan='$ringkasan', cover='$cover', stok='$stok' WHERE id_buku='$id_buku'");

        if($sql){
            echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_buku.php?id='.$id.'";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
        //header('location:tampil_buku.php');
?>
