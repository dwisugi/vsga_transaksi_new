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
	            <a class="nav-link" href="#">Beranda</a>
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
		          <a class="dropdown-item" href="../produk/index.php">Produk</a>		        	
		          <a class="dropdown-item" href="../merk_produk/index.php">Merk Produk</a>
		          <a class="dropdown-item" href="index.php">Kategori Produk</a>
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
	
	<div class="container" style="padding-top: 30px";>
		<h1>Daftar Kategori Produk</h1>
		<hr>
		<br>
		<a class="btn btn-primary" href="add.php">Tambah Data</a>
		<br><br>
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Kategori</th>
				<th>Aksi</th>
			</tr>
			<?php 
				include "../../controller/config.php";
				$query = "SELECT id_kategori, nama_kategori FROM kategori_produk";

				$result = mysqli_query($conn, $query);
				$no=1;
				foreach ($result as $row) {
			?>	<tr>
				<td><?=$no++; ?></td>
				<td><?=$row['nama_kategori']; ?></td>
				<td>
					<a href="edit.php?id_kategori=<?= $row['id_kategori']?>" class="btn btn-warning">Ubah Data</a>
					<a href="../../controller/kategori_produk/delete.php?id_kategori=<?= $row['id_kategori']?>" class="btn btn-danger">Hapus</a>
				</td>
				</tr>
	<?php    }  ?>
		</table>
	</div>
</body>
</html>