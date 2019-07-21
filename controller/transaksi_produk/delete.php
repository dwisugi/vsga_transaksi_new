<?php 
	include '../config.php';

	$id_transaksi = $_GET['id_transaksi'];

	$query = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");

	header('location: ../../view/transaksi_produk/index.php');

 ?>