<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
</head>
<body>
	<a href="index.php">Kembali Ke Menu </a>
	<h1>Tambah Kamar</h1>
 <font size="3">
    <form action="simpan_kamar.php" method="POST">
      <table>
        <tr>
          <td>ID kamar</td>
          <td>: <input type="text"  placeholder="masukkan id kamar" name="id_kamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')"> </td>
        </tr>
        <tr>
          <td>Jenis Kamar</td>
          <td>: <input type="radio" name="jenis_kamar" value="VIP">VIP <input type="radio" value="PRESIDENT">PRESIDENT <input type="radio" name="jenis_kamar" value="REGULER">REGULER</td>
        </tr>
        <tr>
             <td>Tanggal masuk</td>
            <td>: <input type="text" name="tanggal_masuk" id="from"></td>
         </tr>
         <tr>
          <td>Tanggal keluar</td>
          <td>: <input type="text" name="tanggal_keluar" id="to"></td>
        </tr>
        <tr>
          <td>Jumlah Kamar</td>
          <td>: <input type="number" name="jumlah_kamar" placeholder="masukkan jumlah kamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')"></td>
        </tr>
        <tr>
          <td>Harga Kamar</td>
          <td>: <input type="text" name="harga_kamar" placeholder="masukkan harga kamar"  ></td>
        </tr>
        <tr>
          <td colspan="2">
             <button type="submit">Submit</button>
            <button type="reset">Reset</button>
          </td>
        </tr>
        </table>   
  </form>
  </font>
</body>
</html>