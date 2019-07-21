<?php 
	include '../config.php';

	$nama_merk = $_POST['nama_merk'];
	$query = "INSERT INTO merk SET nama_merk = '$nama_merk'";

	mysqli_query($conn, $query);
	header('location: ../../view/merk_produk/index.php');

 ?>