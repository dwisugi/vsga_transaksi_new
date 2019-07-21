<?php 
	include '../config.php';

	$id_produk = $_GET['id_produk'];

	$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id_produk'");

	header('location: ../../view/produk/index.php');

 ?>