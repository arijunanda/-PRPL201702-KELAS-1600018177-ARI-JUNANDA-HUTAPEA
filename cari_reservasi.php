<!DOCTYPE html>
<html lang="en">
<head>
  <title>CARI RESERVASI</title>
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
    <center><h2>DATA RESERVASI</h2></center>
     

<form action="cari_reservasi.php" method="GET">
<div class="form-group">
        <label for="id_kamar">Nomor KTP:</label>
        <input type="date" class="form-control" iplaceholder="cari nomor ktp"  name="cari">
</div>
        <button type="submit" class="btn btn-default" value="cari" class="btn btn-info" >Cari</button>
        
        <!-- <input type="date" name="tanggal_masuk">
<input type="date" name="tanggal_keluar">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset"> --> 
</form>
<center>
<table class="table">
<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
}          
?> 
<table>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "tugasakhir";

$konek = new mysqli($host, $username, $password, $db_name);
?>
<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <b><tr><td>No.</td><td>Nomor KTP</td><td>Nama Lengkap</td><td>Jenis Kamar</td><td>Email</td><td>Nomor HP</td><td>Alamat</td></tr>
                    </thead>
                     <?php


if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $queri = "select * from reservasi where nomor_ktp like '%".$cari."%'";       
  }else{
    $queri = "select * from reservasi";   
  }
$hasil=mysqli_query ($konek,$queri);   
$no=1;
while ($data = mysqli_fetch_array ($hasil)){  
      
        echo "<tr>   
          <td>".$no++."</td>             
          <td>".$data[0]."</td>  
          <td>".$data[1]."</td>
          <td>".$data[2]."</td>
          <td>".$data[3]."</td>
          <td>".$data[4]."</td>
          <td>".$data[5]."</td>
          </tr>";      
      
}
 ?>  
</table></center>

 </div>
   </font>

</body>

</html>