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


$nomor_ktp = $_GET['nomor_ktp'];

$reservasi = mysqli_query($konek, " SELECT * FROM reservasi where nomor_ktp='$nomor_ktp'");
$row = mysqli_fetch_array($reservasi);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Hotel</title>
  </head>
 
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Reservasi</h1>
    <form action="update_reservasi.php" method="post">
      <td><input type="hidden" name="nomor_ktp" value="<?php echo $row['nomor_ktp'];?>"/></td>
      <table>
        <tr>
          <td>Nomor KTP</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['nomor_ktp'];?>"/></td>
        </tr>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'];?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki
              <input type="radio" name="jenis_kelamin" value="perempuan"> Prempuan
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="email" value="<?php echo $row['email'];?>"/></td>
        </tr>
        <tr>
          <td>Nomor HP</td>
          <td>:</td>
          <td><input type="text" name="no_hp" value="<?php echo $row['no_hp'];?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td> <textarea class="form-control" rows="5" id="alamat" name="alamat"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
