<!DOCTYPE html>
<html lang="en">
<head>
  <title>PEGAWAI</title>
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
  <a href="javascript:void(0)">Contact</a>
  <a href="reservasi.php">Reservasi</a>
  <a href="kamar.php">Kamar</a>
  <a href="pegawai.php">Pegawai</a>
</div>

   <font size="3">
      <form action="simpan_pegawai.php" method="POST" name="fform" onchange="hitungtotal()">

      <div class="container">
    <center><h2>DAFTAR PEGAWAI</h2></center>
     <div class="form-group">
        <label for="id_kamar">ID Pegawai :</label>
        <input type="text" class="form-control" id="id_pegawai" placeholder="masukkan id pegawai" name="id_pegawai" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
     <div class="form-group">
        <label for="nama_pegawai">Nama Pegawai</label>
        <input type="text" class="form-control" id="nama_pegawai" placeholder="masukkan nama pegawai" name="nama_pegawai" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('masukkan dengan huruf')">
    </div>
     <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin :</label> <br/>
      <label class="radio-inline">
      <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
      </label>
      <label class="radio-inline">
      <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
    </label>
    </div>
     <div class="form-group">
        <label for="umur_pegawai">Umur Pegawai :</label>
        <input type="text" class="form-control" id="umur_pegawai" placeholder="masukkan umur pegawai" name="umur_pegawai" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
   <div class="form-group">
        <label for="no_hp">Nomor HP :</label>
        <input type="text" class="form-control" id="no_hp" placeholder="masukkan nomor hp" name="no_hp" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
    <div class="form-group">
  		<label for="comment">Alamat :</label>
 		 <textarea class="form-control" rows="5" id="comment" name="alamat_pegawai"></textarea>
		</div>
   
    
         <button type="submit" class="btn btn-default">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
  </div>
</form> 
   </font>

</body>

</html>