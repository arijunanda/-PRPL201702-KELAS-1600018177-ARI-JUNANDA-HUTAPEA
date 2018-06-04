<!DOCTYPE html>
<html lang="en">
<head>
  <title>KAMAR</title>
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

 <script language="javascript">
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
  <script language="javascript">
    <!--
      function hitungtotal()
        {
          var jenis_kamar = (document.fform.jenis_kamar.value);
          var ht = 0.0;
             if(jenis_kamar == "VIP")
              {
                ht = 10000;
              }
            else if(jenis_kamar == "PRESIDENT")
              {
                ht = 50000;
              }
            else
              {
                ht = 20000;
              }
            document.fform.harga_kamar.value = eval(ht);
            //gunakan untuk mengecek!!! alert(total);
        }
        //-->
  </script>
<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="komentar.php(0)">Contact</a>
  <a href="reservasi.php">Reservasi</a>
  <a href="kamar.php">Kamar</a>
  <a href="pegawai.php">Pegawai</a>
</div>

   <font size="3">
      <form action="simpan_kamar.php" method="POST" name="fform" onchange="hitungtotal()">

      <div class="container">
    <center><h2>KAMAR</h2></center>
     <div class="form-group">
        <label for="id_kamar">ID Kamar</label>
        <input type="text" class="form-control" id="id_kamar" name="id_kamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')">
    </div>
    <div class="form-group">
      <label for="jenis_kamar">Jenis Kamar:</label>
      <select class="form-control"  name="jenis_kamar">
        <option>Pilih</option>
        <option value="VIP">VIP</option>
        <option value="PRESIDENT">PRESIDENT</option>
        <option value="REGULER">REGULER</option>
      </select>
    </div>
    <div class="form-group">
        <label for="tanggal_masuk">Tanggal Masuk :</label>
        <input type="text" class="form-control" id="from" name="tanggal_masuk">
    </div>
    <div class="form-group">
        <label for="tanggal_keluar">Tanggal Keluar :</label>
        <input type="text" class="form-control" id="to" name="tanggal_keluar">
    </div>
    <div class="form-group">
        <label for="jumlah_kamar">Jumlah Kamar :</label>
        <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar">
    </div>
    <div class="form-group">
        <label for="id_kamar">Harga Kamar :</label>
        <input type="text" class="form-control" id="harga_kamar" name="harga_kamar">
    </div>
         <button type="submit" class="btn btn-default">Submit</button>
         <button type="reset" class="btn btn-default">Reset</button>
  </div>
</form> 
   </font>

</body>

</html>
