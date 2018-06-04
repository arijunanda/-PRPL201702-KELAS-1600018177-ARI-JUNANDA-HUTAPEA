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


$id_kamar = $_GET['id_kamar'];

$kamar = mysqli_query($konek, " SELECT * FROM kamar where id_kamar='$id_kamar'");
$row = mysqli_fetch_array($kamar);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Hotel</title>

 <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>

  </head>
 
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data Kamar</h1>
    <form action="update_kamar.php" method="POST">
      <td><input type="hidden" name="id_kamar" value="<?php echo $row['id_kamar'];?>"/></td>
      <table> 
        <tr>
          <td>ID Kamar</td>
          <td>: <input type="text" disabled  value="<?php echo $row['id_kamar'];?>"/></td>
        </tr>
        <tr>
          <td>Jenis Kamar</td>
          <td>: <input type="radio" name="jenis_kamar" value="<?php echo $row['jenis_kamar'];?>">VIP <input type="radio" name="jenis_kamar" value="<?php echo $row['jenis_kamar'];?>">PRESIDENT <input type="radio" name="jenis_kamar" value="<?php echo $row['jenis_kamar'];?>">REGULER</td>
        </tr>
        <tr>
          <td>Tanggal Masuk</td>
          <td>: <input type="text" name="tanggal_masuk" id="from" value="<?php echo $row['tanggal_masuk'];?>"></td>
        </tr>
        <tr>
          <td>Tanggal Keluar</td>
          <td>: <input type="text" name="tanggal_keluar" id="to" value="<?php echo $row['tanggal_keluar'];?>"></td>
        </tr>
        <tr>
          <td>Jumlah Kamar</td>
          <td>: <input type="text" name="jumlah_kamar" value="<?php echo $row['jumlah_kamar'];?>"></td>
        </tr>
        <tr>
          <td>Harga Kamar</td>
          <td>: <input type="text" name="harga_kamar" value="<?php echo $row['harga_kamar'];?>"></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <button type="submit" value="Submit">Submit</button>
              <button type="reset" value="reset">Reset</button>
            </center>
          </td>
        </tr>

      </table>
    </form>
  </body>
</html>
