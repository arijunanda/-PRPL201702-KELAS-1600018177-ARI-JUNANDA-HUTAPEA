<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Reservasi</h1>
	<form action="simpan_reservasi.php" method="post">
		<table>
			<tr>
				<td>Nomor KTP</td>
				<td> : </td>
				<td><input type="text" name="nomor_ktp"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki
              		<input type="radio" name="jenis_kelamin" value="perempuan"> Prempuan
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamat" rows="8" cols="40"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>