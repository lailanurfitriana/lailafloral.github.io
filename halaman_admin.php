<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:login.php?pesan=gagal");
	}
	else if($_SESSION['level']!="admin"){
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
<body >

<div class="jumbotron text-center" style="margin-bottom:0;background-color:#35BF70">
	<h1>Hai Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda  sebagai <b><?php echo $_SESSION['level']; ?></b> kami.</p>
</div>	
	<br/>
	<a type="button" class="btn btn-primary btn-sm" class="btn btn-outline-dark" href="tambah.php" >+ TAMBAH TANAMAN</a>

	<br/>
	<br/>
	<h1 style="text-align: center;">DATA PRODUK</h1>
	<table class="table table-striped">
    <thead>
        <tr style="background-color: coral;">
			<th>NO</th>
			<th>Nama</th>
			<th>Jenis Ilmiah</th>
			<th>Gambar</th>
			<th>Harga</th>
			<th>Ket</th>
		</tr>
    </thead>
		
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tanaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jenis_ilmiah']; ?></td>
				<td>
					<img src="asset/bunga/<?= "{$d['gambar']}"; ?>" alt="<?= "{$d['gambar']}" ?>" width="170" height="190">
					
				</td>
				<td><?php echo $d['harga']; ?></td>
				<td>
					<a type="button" class="btn btn-success" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a type="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		
		
			<?php 
		}
		?>
	</table>
	<br>
	<a href="logout.php" type="button" class="btn btn-warning">LOGOUT</a>

	<br/>
	<br/>
</table>
</body>
</html>