<!DOCTYPE html>
<html lang="en">
<head>
  <title>CARI KAMAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
body {
  margin: 0;
  font-size: 28px;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>

</head>
<body>
  
<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="komentar.php">Contact</a>
  <a href="reservasi.php">Reservasi</a>
  <a href="kamar.php">Kamar</a>
  <a href="pegawai.php">Pegawai</a>
  <a href="cari_kamar.php">Data Kamar</a>
  <a href="cari_reservasi.php">Data Reservasi</a>
</div>
   <font size="3">
      

      <div class="container">
    <center><h2>DATA KAMAR</h2></center>
     

<form action="" method="POST">
<div class="form-group">
        <label for="id_kamar">Tanggal Masuk :</label>
        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
</div>
<div class="form-group">
        <label for="id_kamar">Tanggal Keluar :</label>
        <input type="text" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
</div>
        <button type="submit" class="btn btn-default" id="submit" name="submit2" value="Cari">Submit</button>
        <button type="reset" class="btn btn-default" id="submit" name="submit1" value="Reset">Reset</button>
<!-- <input type="date" name="tanggal_masuk">
<input type="date" name="tanggal_keluar">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset"> --> 
</form>
<center>
<table class="table">
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

$sql = "SELECT * FROM kamar";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  kamar where id_kamar like '%$qcari%' or tanggal_masuk like '%$qcari' or tanggal_keluar like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tanggal_masuk'];
  $qcari2=$_POST['tanggal_keluar'];
  $sql="SELECT * FROM  kamar where tanggal_masuk between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  kamar ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<b><tr><td>No.</td><td>ID Kamar</td><td>jenis_kamar</td><td>Tanggal Masuk</td><td>Tanggal Keluar</td><td>Jumlah kamar</td><td>Harga Kamar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><p>".$no++."</td>";
    echo "<td>".$row['id_kamar']."</td>";
    echo "<td>".$row['jenis_kamar']."</td>";
    echo "<td>".$row['tanggal_masuk']."</td>";
    echo "<td>".$row['tanggal_keluar']."</td>";
    echo "<td>".$row['jumlah_kamar']."</td>";
    echo "<td>".$row['harga_kamar']."</td>";
//x    echo "<td><a href='nota.php?user=".$row['Nama_Customer']."'>Cetak</a></td>";
 //   echo "<td><a href='delete_c.php?user=".$row['Nama_Customer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>

 </div>
   </font>

</body>

</html>