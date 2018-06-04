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

$id_pegawai = $_POST ['id_pegawai'];
$nama_pegawai = $_POST ['nama_pegawai'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$umur_pegawai = $_POST ['umur_pegawai'];
$no_hp = $_POST ['no_hp'];
$alamat_pegawai = $_POST ['alamat_pegawai'];

$sql = "UPDATE pegawai SET nama_pegawai='$nama_pegawai',jenis_kelamin='$jenis_kelamin',umur_pegawai='$umur_pegawai', no_hp='$no_hp',alamat_pegawai='$alamat_pegawai' WHERE id_pegawai='$id_pegawai'";
if($konek->query($sql)){
  echo "Data Pegawai BERHASIL diedit!<br/>";
}else{
  echo "Data Pegawai GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pegawai.php'>Daftar Pegawai</a>";
?>
