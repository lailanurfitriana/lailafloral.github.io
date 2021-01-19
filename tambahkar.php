<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Produk</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
<body>
<?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['username']==""){
    header("location:halaman_karyawan.php?pesan=gagal");
  }

?>
	<br/>
	<br/>
	<center>
        <h1>Tambah Data</h1>
    <center>
	<form method="post" action="proses_tambahkar.php" enctype="multipart/form-data">
		<section class="base">
	        <div>
	          <label>Nama Kustomer</label>
	          <input type="text" name="nama_cust" autofocus="" required="" />
	        </div>
	        <div>
	          <label>Deskripsi Produk</label>
	          <input type="text" name="deskripsi_produk" />
	        </div>
	        <div>
	        	<label>Jumlah Stok</label>
				<select class="form-control" name="jumlah_stok" required="">
					<option value="0">0</option>
				    <option value="1">1</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
				    <option value="5">5</option>
				    <option value="6">6</option>
				    <option value="7">7</option>
				    <option value="8">8</option>
				    <option value="9">9</option>
				    <option value="10">10</option>
				</select>
			</div>
	        <div>
	          <label>Gambar</label>
	          <input type="file" name="gambar" required="" />
	        </div>
	        <div>
	         <button type="submit">Simpan Produk</button>
	        </div>
	        <br>
	        <div>
	        	<center>
        				<a type="button" class="btn btn-dark" href="halaman_karyawan.php">KEMBALI</a>
    			<center>
	        </div>
	    </section>
	</form>
</body>
</html>