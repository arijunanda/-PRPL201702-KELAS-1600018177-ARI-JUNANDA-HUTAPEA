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
$masuk = date_create($_POST['tanggal_masuk']);
$keluar = date_create($_POST['tanggal_keluar']);
$jumlah_hari = date_diff($masuk,$keluar)->format('%a');

$id_kamar = $_POST ['id_kamar'];
$jenis_kamar = $_POST ['jenis_kamar'];
$tanggal_masuk = $_POST ['tanggal_masuk'];
$tanggal_keluar = $_POST ['tanggal_keluar'];
$jumlah_kamar = $_POST ['jumlah_kamar'];
$harga_kamar = $_POST ['harga_kamar'];
$total_harga = $_POST ['harga_kamar'] * $_POST ['jumlah_kamar'] * $jumlah_hari ;

$sql = "INSERT INTO kamar(id_kamar, jenis_kamar, tanggal_masuk, tanggal_keluar,jumlah_hari, jumlah_kamar, harga_kamar, total_harga) VALUES ('$id_kamar','$jenis_kamar','$tanggal_masuk','$tanggal_keluar','$jumlah_hari','$jumlah_kamar','$harga_kamar','$total_harga')";
if($konek->query($sql)){
	echo "Data kamar Berhasil Di tambah! <br/>";
}
else{
	echo "Data kamar Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_kamar.php'>Tambah Data Kamar<a/>";


?>