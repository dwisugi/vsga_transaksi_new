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
		          <a class="dropdown-item" href="../produk/index.php">Produk</a>		        	
		          <a class="dropdown-item" href="../merk_produk/index.php">Merk Produk</a>
		          <a class="dropdown-item" href="../kategori_produk/index.php">Kategori Produk</a>
		        </div>
		      </li>
	        </ul>
	        <!-- <form class="form-inline my-2 my-lg-0">
	          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
	        </form> -->
	      </div>
	    </div>
    </nav>
    <!-- Navbar End -->
	<!-- Konten -->
	<div class="container" style="margin-top: 100px;">
		<h1 class="text-center">Transaksi Produk</h1>
		<hr>
		<a href="add.php" class="btn btn-primary mb-2 text-right">Tambah</a>
		<!-- Tabel -->
		<table class="table table-bordered table-striped table-hover text-uppercase text-center">
			<thead class="thead-dark">
				<tr>
					<th>no</th>
					<th>tanggal transaksi</th>
					<th>total transaksi</th>
					<th>id pelanggan</th>
					<th>id produk</th>
					<th>opsi</th>
				</tr>
			</thead>
			<tbody>
			<!-- PHP -->
			<?php 
				$query = "SELECT * FROM `transaksi` 
				INNER JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan 
				INNER JOIN produk ON transaksi.id_produk=produk.id_produk;"; // join data antara tabel transaksi => pelanggan => produk
				$result = mysqli_query($conn, $query);
				$no = 1;
				foreach ($result as $value) { ?>
			<!-- PHP End-->
				<!-- Loop Konten -->
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $value['tanggal_transaksi'] ?></td>
					<td><?= $value['total_transaksi'] ?></td>
					<td><?= $value['id_pelanggan'] ?></td>
					<td><?= $value['id_produk'] ?></td>
					<td>
					<a href="edit.php?id_transaksi=<?= $value['id_transaksi'] ?>" class="btn btn-warning">Ubah</a>
						<a href="../../controller/transaksi_produk/delete.php?id_transaksi=<?= $value['id_transaksi'] ?>" class="btn btn-danger">Hapus</a>
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