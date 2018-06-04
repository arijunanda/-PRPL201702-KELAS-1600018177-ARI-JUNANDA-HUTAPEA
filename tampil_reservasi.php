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

$sql = "SELECT * FROM reservasi";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Reservasi</h1>";
echo "<table border='1'>";
echo "<tr>
        <td>No.</td>
        <td>Nomor KTP</td>
        <td>Nama Lengkap</td>
        <td>Jenis Kelamin</td>
        <td>Email</td>
        <td>Nomor HP</td>
        <td>Alamat</td>
        <td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nomor_ktp']."</td>";
    echo "<td>".$row['nama_lengkap']."</td>";
    echo "<td>".$row['jenis_kelamin']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['no_hp']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td><a href='formupdate_reservasi.php?nomor_ktp=".$row['nomor_ktp']."'>Edit</a></td>";
    echo "<td><a href='delete_reservasi.php?nomor_ktp=".$row['nomor_ktp']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
