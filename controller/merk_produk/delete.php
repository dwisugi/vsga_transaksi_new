<?php 
	include '../config.php';

	$id_merk = $_GET['id_merk'];

	$query = mysqli_query($conn, "DELETE FROM merk WHERE id_merk = '$id_merk'");

	header('location: ../../view/merk_produk/index.php');

 ?>