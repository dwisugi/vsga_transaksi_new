<?php include '../../controller/config.php';
$query1 = "SELECT * FROM pelanggan"; //untuk menampikan data dari tabel pelanggan
$query2 = "SELECT * FROM produk"; //untuk menampikan data dari tabel produk
$pelanggan = mysqli_query($conn, $query1);
$produk = mysqli_query($conn, $query2);



?>
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
		<!-- <h1 class="text-center">Tambah Form Kategori Produk</h1>
		<hr>
		<br> -->
		<!-- Start Form Insert -->
		<form action="../../controller/transaksi_produk/insert.php" method="POST">
			<div class="form-group col-md-6 mx-auto border p-5 rounded">
				<h1 class="text-center">Tambah Transaksi Produk</h1>
				<hr>
				<label class="font-weight-bold">Tanggal Transaksi</label>
				<input type="date" name="tanggal_transaksi" class="form-control" autocomplete="off" autofocus="on" required><br>
				<label class="font-weight-bold">Total Transaksi</label>
				<input type="number" name="total_transaksi" class="form-control" placeholder="Masukkan Total Transaksi" autocomplete="off" autofocus="on" required><br>
				<div class="form-group">
					<label>Id Pelanggan</label>
					<select class="custom-select" name="id_pelanggan">
						<!-- <option selected>Open this select menu</option> -->
						<?php foreach($pelanggan as $kat) : ?>
							<option require><?= $kat['id_pelanggan'],$kat['nama_pelanggan'] ?></option>
						<? endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label>Id Produk</label>
					<select class="custom-select" name="id_produk">
						<!-- <option selected>Open this select menu</option> -->
						<?php foreach($produk as $mrk) : ?>
						<option require><?= $mrk['id_produk'],$mrk['nama_produk']?></option>
						<? endforeach ?>
					</select>
				</div>
				<button type="submit" class="btn btn-success mt-2">Simpan</button>
			</div>
            
		</form>
		<!-- Finish Form Insert -->
		<!-- <button class="button btn-primary" href="add.php">Tambah Data</button>
		<br><br>
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Merk</th>
				<th>Aksi</th>
			</tr>
		</table> -->
	</div>
</body>
</html>