<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$no = $_POST['no'];
$nama = $_POST['nama'];
$jenis_ilmiah = $_POST['jenis_ilmiah'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;
// Set path folder tempat menyimpan fotonya

// Proses upload
if(move_uploaded_file($tmp)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO tanaman(no, nama, jenis_ilmiah, harga, gambar) VALUES(:no,:nama,:ji,:harga,:gambar)");
  $sql->bindParam(':no', $no);
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':ji', $jenis_ilmiah);
  $sql->bindParam(':harga', $harga);
  $sql->bindParam(':gam', $fotobaru);
  $sql->execute(); // Eksekusi query insert
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: halaman_admin.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>