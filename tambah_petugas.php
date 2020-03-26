<?php
//memasukkan file config.php
    include('../js/config.php');
    if(isset($_POST['submit'])){
        $nama_petugas			      = @$_POST['nama_petugas'];
        $telp	          = @$_POST['telp'];

        $cek = mysqli_query($koneksi, "SELECT * FROM petugas WHERE nama_petugas='$nama_petugas'") or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas, telp) VALUES('$nama_petugas', '$telp')") or die(mysqli_error($koneksi));

            if($sql){
                echo '<script>alert("Berhasil menambahkan data"); document.location="petugas.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, nama_petugas sudah terdaftar</div>';
        }
    }
?>
