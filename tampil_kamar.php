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

$sql = "SELECT * FROM kamar";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Kamar</h1>";
echo "<table border='1'>";
echo "<tr>
        <td>No.</td>
        <td>ID Kamar</td>
        <td>Jenis Kamar</td>
        <td>Tanggal Masuk</td>
        <td>Tanggal Keluar</td>
        <td>Jumlah Hari</td>
        <td>Jumlah Kamar</td>
        <td>Harga Kamar</td>
        <td>Total Harga</td>
        <td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_kamar']."</td>";
    echo "<td>".$row['jenis_kamar']."</td>";
    echo "<td>".$row['tanggal_masuk']."</td>";
    echo "<td>".$row['tanggal_keluar']."</td>";
    echo "<td>".$row['jumlah_hari']."</td>";
    echo "<td>".$row['jumlah_kamar']."</td>";
    echo "<td>".$row['harga_kamar']."</td>";
    echo "<td>".$row['total_harga']."</td>";
    echo "<td><a href='formupdate_kamar.php?id_kamar=".$row['id_kamar']."'>Edit</a></td>";
    echo "<td><a href='delete_kamar.php?id_kamar=".$row['id_kamar']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
