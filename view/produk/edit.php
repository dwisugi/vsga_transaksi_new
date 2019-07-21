<?php include '../../controller/config.php';; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
	    <div class="container">
	    <!-- Brand -->
	      <a class="navbar-brand" href="#">Produk</a>
	    <!-- Toggler -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    <!-- Content Nav -->
	      <div class="collapse navbar-collapse" id="navbar">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="../../index.php">Beranda</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="controller/config.php">Cek Koneksi</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="contact.html">Katalog</a>
	          </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Master Data
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="index.php">Produk</a>		        	
		          <a class="dropdown-item" href="../merk_produk/index.php">Merk Produk</a>
		          <a class="dropdown-item" href="../kategori_produk/index.php">Kategori Produk</a>
		        </div>
		      </li>
	        </ul>
	        <form class="form-inline my-2 my-lg-0">
	          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
	        </form>
	      </div>
	    </div>
    </nav>
    <!-- Navbar End -->
	<!--  -->
	<div class="container" style="padding-top: 30px";>
		<h1 class="text-center">Ubah Form Kategori Produk</h1>
		<hr>
		<br>
		<!-- Start Form Insert -->
		<?php 
			include "../../controller/config.php";
			$id_produk=$_GET['id_produk'];
			$query="SELECT * FROM produk where id_produk='$id_produk'";

			$result=mysqli_query($conn, $query);
			$row=mysqli_fetch_array($result);				
	?>
		<form action="../../controller/produk/update.php" method="POST">
			<div class="form-group col-md-6 mx-auto border p-5 rounded">
				<label class="font-weight-bold">Nama Kategori Produk</label>
				<input type="hidden" name="id_produk" value="<?=$row['id_produk'];?>">
				<input type="text" name="nama_produk" value="<?=$row['nama_produk']; ?>" class="form-control" autocomplete="off" autofocus="on" required>
				<button type="submit" class="btn btn-success mt-2">Simpan</button>
			</div>
		</form>
	</div>
</body>
</html>