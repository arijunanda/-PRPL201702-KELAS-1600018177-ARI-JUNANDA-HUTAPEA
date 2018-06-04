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

$id_pegawai = $_GET['id_pegawai'];

$sql = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";
if($konek->query($sql)){
  echo "Data PEGAWAI BERHASIL dihapus!<br/>";
}else{
  echo "Data PEGAWAI GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pegawai.php'>Daftar Pegawai</a>";
?>
