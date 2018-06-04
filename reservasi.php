<!DOCTYPE html>
<html lang="en">
<head>
  <title>RESERVASI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<div class="container">
  <center><h2>RESERVASI</h2></center>
  <font size="3">
    <form action="simpan_reservasi.php" method="POST">
      
    <div class="form-group">
        <label for="nomor_ktp">Nomor KTP</label>
        <input type="text" class="form-control" id="nomor_ktp" placeholder="masukkan nomor ktp" name="nomor_ktp" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
    <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" placeholder="masukkan nama lengkap" name="nama_lengkap" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('masukkan dengan huruf')">
    </div> 
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label> <br/>
      <label class="radio-inline">
      <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
      </label>
      <label class="radio-inline">
      <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
    </label>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="masukkan email" name="email" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity(' masukkan huruf & angka dengan karakter @')">
    </div>
    <div class="form-group">
      <label for="no_hp">Nomor HP</label>
      <input type="text" class="form-control" id="no_hp"  placeholder="masukkan nomor hp" name="no_hp" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
     <div class="form-group">
        <label for="comment">Alamat</label>
        <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea>
    </div> 
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-default">Reset</button>
  </form>
  </font>
</div>

</body>
</html>
