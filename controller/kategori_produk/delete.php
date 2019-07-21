<?php 
	include "../config.php";
	$id_kategori=$_GET['id_kategori'];

	$query="DELETE FROM kategori_produk WHERE id_kategori='$id_kategori'";

	mysqli_query($conn, $query);

	header('location:../../view/kategori_produk/index.php');
	

 ?>