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

$id_kamar = $_GET['id_kamar'];

$sql = "DELETE FROM kamar WHERE id_kamar='$id_kamar'";
if($konek->query($sql)){
  echo "Data KAMAR BERHASIL dihapus!<br/>";
}else{
  echo "Data KAMAR GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_kamar.php'>Daftar Kamar</a>";
?>
