<?php 
	include '../config.php';

	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$total_transaksi = $_POST['total_transaksi'];
	$id_pelanggan = $_POST['id_pelanggan'];
	$id_produk = $_POST['id_produk'];
	$query = "INSERT INTO transaksi SET tanggal_transaksi = '$tanggal_transaksi', 
	total_transaksi = '$total_transaksi', id_pelanggan = '$id_pelanggan',
	id_produk = '$id_produk'";

	mysqli_query($conn, $query);
	header('location: ../../view/transaksi_produk/index.php');

 ?>