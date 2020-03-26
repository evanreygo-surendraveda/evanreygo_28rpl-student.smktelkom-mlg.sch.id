<?php
	include('../js/config.php');
	$id_buku = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id_buku'");
	header('location:tampil_buku.php');

?>
