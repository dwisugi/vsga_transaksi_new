<?php 
	include '../config.php';

	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];

	$query = mysqli_query($conn, "UPDATE produk SET nama_produk = '$nama_produk' WHERE id_produk = '$id_produk'");

	header('location: ../../view/produk/index.php');

 ?>