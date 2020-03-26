<?php
	include('../js/config.php');
	$id_petugas = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
	header('location:petugas.php');

?>
