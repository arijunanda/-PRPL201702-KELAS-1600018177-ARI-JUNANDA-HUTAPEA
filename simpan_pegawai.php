<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "tugasakhir";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$id_pegawai = $_POST ['id_pegawai'];
$nama_pegawai = $_POST ['nama_pegawai'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$umur_pegawai = $_POST ['umur_pegawai'];
$no_hp = $_POST ['no_hp'];
$alamat_pegawai = $_POST ['alamat_pegawai'];

$sql = "INSERT INTO pegawai(id_pegawai, nama_pegawai, jenis_kelamin, umur_pegawai, no_hp, alamat_pegawai) VALUES ('$id_pegawai','$nama_pegawai','$jenis_kelamin','$umur_pegawai','$no_hp','$alamat_pegawai')";
if($konek->query($sql)){
	echo "Data Pegawai Berhasil Di tambah! <br/>";
}
else{
	echo "Data Pegawai Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_pegawai.php'>Tambah Data Pegawai<a/>";
?>