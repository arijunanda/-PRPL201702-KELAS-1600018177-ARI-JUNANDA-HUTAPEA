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

$nomor_ktp = $_POST ['nomor_ktp'];
$nama_lengkap = $_POST ['nama_lengkap'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$email = $_POST ['email'];
$no_hp = $_POST ['no_hp'];
$alamat = $_POST ['alamat'];

$sql = "INSERT INTO reservasi(nomor_ktp, nama_lengkap, jenis_kelamin, email, no_hp, alamat) VALUES ('$nomor_ktp','$nama_lengkap','$jenis_kelamin','$email','$no_hp','$alamat')";
if($konek->query($sql)){
	echo "Data Reservasi Berhasil Di tambah! <br/>";
}
else{
	echo "Data Reservasi Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_reservasi.php'>Tambah Data Reservasi<a/>";
?>