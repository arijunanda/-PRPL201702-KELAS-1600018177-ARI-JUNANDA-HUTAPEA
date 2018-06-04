<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "tugasakhir";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id_kamar = $_POST ['id_kamar'];
$jenis_kamar = $_POST ['jenis_kamar'];
$tanggal_masuk = $_POST ['tanggal_masuk'];
$tanggal_keluar = $_POST ['tanggal_keluar'];
$jumlah_kamar = $_POST ['jumlah_kamar'];
$harga_kamar = $_POST ['harga_kamar'];

$sql = "UPDATE kamar SET jenis_kamar='$jenis_kamar',tanggal_masuk='$tanggal_masuk',tanggal_keluar='$tanggal_keluar', jumlah_kamar='$jumlah_kamar' WHERE id_kamar='$id_kamar'";
if($konek->query($sql)){
  echo "Data Kamar BERHASIL diedit!<br/>";
}else{
  echo "Data Kamar GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>
