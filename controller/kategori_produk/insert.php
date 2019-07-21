<?php 
	include "../config.php";
	$nama_kategori=$_POST['nama_kategori'];
	$query="insert into kategori_produk set nama_kategori='$nama_kategori'";

	mysqli_query($conn, $query);
	header("location:../../view/kategori_produk/index.php");
 ?>