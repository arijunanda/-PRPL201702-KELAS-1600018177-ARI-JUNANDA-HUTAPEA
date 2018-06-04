<?php 
	$konek = new mysqli("localhost","root","","tugasakhir");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel reservasi
	$sql = "create table reservasi (nomor_ktp varchar(30) not null primary key, nama_lengkap varchar(40), jenis_kelamin varchar(10), email varchar(30) , no_hp varchar(15), alamat varchar(200))";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

//tabel kamar
	$sql = "create table kamar (id_kamar varchar(30) not null primary key, jenis_kamar varchar(20), tanggal_masuk varchar(20), tanggal_keluar varchar(20) , jumlah_kamar int(15),  harga_kamar int(50))";
	if($konek->query($sql)){
		echo "Tabel Kamar Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

//tabel pegawai
	$sql = "create table pegawai (id_pegawai varchar(20) not null primary key, nama_pegawai varchar(20), jenis_kelamin varchar(20), umur_pegawai int(10) , no_hp int(15),  alamat_pegawai varchar(50))";
	if($konek->query($sql)){
		echo "Tabel Kamar Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

//tabel pembayaran
	$sql = "create table pembayaran(
			kode_pembayaran varchar(30) not null primary key, nomor_ktp varchar(30), id_kamar varchar(30), foreign key (nomor_ktp) references reservasi(nomor_ktp), foreign key(id_kamar) references kamar(id_kamar))";
	if ($konek->query($sql)) {

		echo "Tabel Pembayaran berhasil di Buat";
	}
	else{
		echo "Tabel Tidak berhasil di buat karena ".$konek->error;
	}

//tabel komentar
	$sql = "create table komentar(nama_komentar varchar(30) not null primary key, email_komentar varchar(30), komentar varchar(100))";
	if ($konek->query($sql)) {

		echo "Tabel komentar berhasil di Buat";
	}
	else{
		echo "Tabel Tidak berhasil di buat karena ".$konek->error;
	}
	$konek->close();
 ?>