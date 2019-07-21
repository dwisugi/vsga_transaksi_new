<?php include '../../controller/config.php';; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Produk</title>
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm fixed-top">
	    <div class="container">
	    <!-- Brand -->
	      <a class="navbar-brand" href="#">Produk</a>
	    <!-- Toggler -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    <!-- Content Nav -->
	      <div class="collapse navbar-collapse" id="navbar">
	        <ul class="navbar-nav mt-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="#">Beranda</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="">Cek Koneksi</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="">Katalog</a>
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
	<!-- Konten -->
	<div class="container" style="margin-top: 100px;">
		<h1 class="text-center">Daftar Produk</h1>
		<hr>
		<a href="add.php" class="btn btn-primary mb-2 text-right">Tambah</a>
		<!-- Tabel -->
		<table class="table table-bordered table-striped table-hover text-uppercase">
			<thead class="thead-dark">
				<tr>
					<th>no</th>
					<th>nama produk</th>
					<th>warna</th>
					<th>jumlah</th>
					<th>harga</th>
					<th>merk</th>
					<th>kategori</th>
					<th>opsi</th>
				</tr>
			</thead>
			<tbody>
			<!-- PHP -->
			<?php 
				$query = "SELECT id_produk, nama_produk, warna, jumlah, harga, nama_kategori, nama_merk  FROM `produk` 
				INNER JOIN kategori_produk ON produk.id_kategori=kategori_produk.id_kategori 
				INNER JOIN merk ON produk.id_merk=merk.id_merk;";
				$result = mysqli_query($conn, $query);
				$no = 1;
				foreach ($result as $value) { ?>
			<!-- PHP End-->
				<!-- Loop Konten -->
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $value['nama_produk'] ?></td>
					<td><?= $value['warna'] ?></td>
					<td><?= $value['jumlah'] ?></td>
					<td><?= $value['harga'] ?></td>
					<td><?= $value['nama_merk'] ?></td>
					<td><?= $value['nama_kategori'] ?></td>
					<td>
					<a href="edit.php?id_produk=<?= $value['id_produk'] ?>" class="btn btn-warning">Ubah</a>
						<a href="../../controller/produk/delete.php?id_produk=<?= $value['id_produk'] ?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				<!-- Loop Konten End -->
			<!-- PHP -->
			<?php } ?>
			<!-- PHP End -->
			</tbody>
		</table>
		<!-- Tabel End -->
	</div>
	<!-- Konten End -->
</body>
</html>