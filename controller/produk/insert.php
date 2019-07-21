<?php 
	include '../config.php';

	$nama_produk = $_POST['nama_produk'];
	$id_kategori = $_POST['id_kategori'];
	$id_merk = $_POST['id_merk'];
	$query = "INSERT INTO produk SET nama_produk = '$nama_produk', id_kategori = '$id_kategori', id_merk = '$id_merk'";

	mysqli_query($conn, $query);
	header('location: ../../view/produk/index.php');

 ?>