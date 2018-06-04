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

$nomor_ktp = $_GET['nomor_ktp'];

$sql = "DELETE FROM reservasi WHERE nomor_ktp='$nomor_ktp'";
if($konek->query($sql)){
  echo "Data RESERVASI BERHASIL dihapus!<br/>";
}else{
  echo "Data RESERVASI GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_reservasi.php'>Daftar Reservasi</a>";
?>
