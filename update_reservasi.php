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

$nomor_ktp = $_POST ['nomor_ktp'];
$nama_lengkap = $_POST ['nama_lengkap'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$email = $_POST ['email'];
$no_hp = $_POST ['no_hp'];
$alamat = $_POST ['alamat'];

$sql = "UPDATE reservasi SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',email='$email', no_hp='$no_hp', alamat='$alamat' WHERE nomor_ktp='$nomor_ktp'";
if($konek->query($sql)){
  echo "Data Reservasi BERHASIL diedit!<br/>";
}else{
  echo "Data Reservasi GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_reservasi.php'>Daftar Reservasi</a>";
?>
