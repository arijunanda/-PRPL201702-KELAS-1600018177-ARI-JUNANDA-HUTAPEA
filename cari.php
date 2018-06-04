<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="cari.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<td>No.</td>
        <td>Nomor KTP</td>
        <td>Nama Lengkap</td>
        <td>Jenis Kelamin</td>
        <td>Email</td>
        <td>Nomor HP</td>
        <td>Alamat</td>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from reservasi where nomor_ktp like '%".$cari."%'");				
	}
	else{
		$data = mysql_query("select * from reservasi");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nomor_ktp']; ?></td>
		<td><?php echo $d['nama_lengkap']; ?></td>
		<td><?php echo $d['jenis_kelamin']; ?></td>
		<td><?php echo $d['email']; ?></td>
		<td><?php echo $d['no_hp']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>