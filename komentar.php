<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOMENTAR</title>
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
</div>

   <font size="3">
      <form action="simpan_komentar.php" method="POST">

      <div class="container">
    <center><h2>KOMENTAR</h2></center>
     <div class="form-group">
        <label for="nama_komentar">Nama :</label>
        <input type="text" class="form-control" id="nama_komentar" placeholder="masukkan nama " name="nama_komentar" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('masukkan dengan huruf')">
    </div>
    <div class="form-group">
      <label for="email_komentar">Email:</label>
      <input type="email_komentar" class="form-control" id="email_komentar" placeholder="masukkan email" name="email_komentar" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity(' masukkan huruf & angka dengan karakter @')">
    </div>
    <div class="form-group">
      <label for="comment">Komentar :</label>
     <textarea class="form-control" rows="5" id="comment" name="komentar"></textarea>
    </div>    
         <button type="submit" class="btn btn-default">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
  </div>
</form> 
   </font>

</body>

</html>