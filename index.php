<!DOCTYPE html>
<html>
<head>
  <title>HUTAPEA HOTEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
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

<div class="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="komentar.php">Contact</a>
  <a href="reservasi.php">Reservasi</a>
  <a href="kamar.php">Kamar</a>
  <a href="pegawai.php">Pegawai</a>

<div class="header">
  <h2>HUTAPEA HOTEL</h2>
  <img src="hotel1.jpg" width="1300px" height="410px">
</div>

<div class="content">
  <font size="4">
    <table>
    <tr>
      <td>
        <center>GAMBARAN HOTEL</center>
      </td>
    </tr>
    <tr>
      <td>
        <p align="justify">Terletak di pusat kota Singapura yang padat ditengah distrik perbelanjaan, hiburan dan Distrik Bisnis Sentral, hutapea Hotel merupakan hotel kontemporer yang baru terletak di Beach Road yang berjarak hanya beberapa menit dari Bugis Village, Bugis Junction, dan Suntec City yang populer serta Perpustakaan Nasional. Karena lokasinya yang strategis dan dekat dengan stasiun MRT Bugis, hotel ini memberikan akomodasi yang nyaman dengan harga terjangkau diluar perkiraan Anda. </p>
      </td>
    </tr>
    <tr>
      <td>
        <p align="justify">KAMAR : Terdapat 96 kamar modern dengan desain kontemporer dan memiliki pemandangan kota yang dibagi dalam tipe Deluxe dan Standard, dengan fasilitas standar seperti TV, pemutar DVD, hairdryer, fasilitas untuk membuat kopi/teh, saluran TV kabel dan WIFI. </p>
      </td>
    </tr>
    <tr>
      <td>
        <p align="justify">RESTORAN & MAKANAN : Tempat untuk menikmati sarapan tersedia di hotel ini. Ambillah tur gastronomi untuk memanjakan lidah Anda dengan masakan Indonesia yang tersaji di restoran kami, Anda pasti akan terus menginginkannya.</p>
      </td>
    </tr>
    <tr>
      <td>
        <p align="justify">AKTIVITAS & OLAHRAGA : Untuk tamu hotel penggemar kuliner dan belanja akan menemukan berbagai tempat yang menarik di sekitar hotel seperti berbagai cafe trendi, pub dan restoran. Tamu juga mudah mencapai berbagai moda transportasi publik dan mudah untuk bepergian ke berbagai lokasi seperti Marina Bay Sands, Singapore Flyer Sentosa, Universal Studio, Chinatown dan Little India yang dapat dicapai dalam waktu beberapa menit.</p>
      </td>
    </tr>
    <tr>
      <td>
        <p align="justify">LOKASI HOTEL : Hutapea Hotel terletak di pusat kota Singapura, hanya 10 menit berjalan kaki dari stasiun MRT Bugis dan Pusat Perbelanjaan Raffles City. Hutapea Hotel juga berjarak hanya 5 menit berjalan kaki dari Parco Bugis Junction mall, sedangkan Clarke Quay dan Chinatown berjarak 10 menit menggunakan mobil. Bandara Internasional Changi berjarak 20 menit mengemudi. </p>
      </td>
    </tr>
  </table>
  </font>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
