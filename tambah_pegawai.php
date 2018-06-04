<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Pegawai</h1>
 <font size="3">
    <form action="simpan_kamar.php" method="POST">
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
  </font>
</body>
</html>