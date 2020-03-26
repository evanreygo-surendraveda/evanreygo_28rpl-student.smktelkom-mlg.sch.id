<?php
	include('../js/config.php');
	$id_anggota = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$id_anggota'");
	header('location:member.php');

?>
