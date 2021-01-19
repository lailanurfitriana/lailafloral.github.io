<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:login.php?pesan=gagal");
	}
	else if($_SESSION['level']!="karyawan"){
		header("location:login.php?pesan=gagal");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0;background-color:#d27979">
	<h1>Karyawan Space</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?>
</div>
	<br>
	<a type="button" class="btn btn-info" href="tambahkar.php" >+ TAMBAH DATA</a>
	<br/>
	<br/>

	<h1 style="text-align: center;">DATA PRODUK</h1>
	<table class="table table-striped">
    <thead>
		<tr style="background-color: coral;margin: 190px auto; padding: 30px 20px;">
			<th>NO</th>
			<th>Pembeli</th>
			<th>Deskripsi Produk</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th>Ket</th>
		</tr>
	</thead>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from stok");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_cust']; ?></td>
				<td><?php echo $d['deskripsi_produk']; ?></td>
				<td><?php echo $d['jumlah_stok']; ?></td>
				<td><img src="assetkar/bunga/<?= "{$d['gambar']}"; ?>" alt="<?= "{$d['gambar']}" ?>" width="170" height="190"></td>
				<td>
					<a type="button" class="btn btn-success" href="editkar.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a type="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		
		
			<?php 
		}
		?>
	</table>
	<br>
<div class="jumbotron text-center" style="margin-bottom:0;background-color:#d27979">
	<a class="btn btn-primary btn-block" href="logout.php">LOGOUT</a>
</div>
</table>
</body>
</html>
</body>
</html>