<?php 
	include '../config.php';

	$id_merk = $_POST['id_merk'];
	$nama_merk = $_POST['nama_merk'];

	$query = mysqli_query($conn, "UPDATE merk SET nama_merk = '$nama_merk' WHERE id_merk = '$id_merk'");

	header('location: ../../view/merk_produk/index.php');

 ?>