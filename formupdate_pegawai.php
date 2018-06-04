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

$id_pegawai = $_GET['id_pegawai'];

$pegawai = mysqli_query($konek, " SELECT * FROM pegawai where id_pegawai='$id_pegawai'");
$row = mysqli_fetch_array($pegawai);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Pegawai</title>

  </head>
 
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Pegawai</h1>
    <form action="update_pegawai.php" method="POST">
      <td><input type="hidden" name="id_pegawai" value="<?php echo $row['id_pegawai'];?>"/></td>
      <table>
      <tr>
        <td colspan="2">
          <center>DAFTAR PEGAWAI</center>
        </td>
      </tr>
      <tr>
        <td>ID Pegawai</td>
        <td>: <input type="text" name="id_pegawai" ></td>
      </tr>
      <tr>
        <td>Nama Pegawai</td>
        <td>: <input type="text" name="nama_pegawai"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>: <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
      </tr>
      <tr>
        <td>Umur Pegawai</td>
        <td> : <input type="number" name="umur_pegawai"></td>
      </tr>
      <tr>
        <td>Nomor HP</td>
        <td>: <input type="text" name="no_hp"></td>
      </tr>
      <tr>
        <td>Alamat Pegawai</td>
        <td>: <textarea rows="5" name="alamat_pegawai"></textarea></td>
      </tr>
      <tr>
        <td colspan="2">
                <center>
                  <button type="submit">Submit</button>
                  <button type="reset">Reset</button>
                </center>
              </td>
      </tr>
    </table>
    </form>
  </body>
</html>
