<?php
//memasukkan file config.php
    include('../js/config.php');
    if(isset($_POST['submit'])){
        $nama			      = @$_POST['nama'];
        $kelas			    = @$_POST['kelas'];
        $telp	          = @$_POST['telp'];

        $cek = mysqli_query($koneksi, "SELECT * FROM anggota WHERE nama='$nama'") or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO anggota(nama, kelas, telp) VALUES('$nama', '$kelas', '$telp')") or die(mysqli_error($koneksi));

            if($sql){
                echo '<script>alert("Berhasil menambahkan data"); document.location="member.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, nama sudah terdaftar</div>';
        }
    }
?>
