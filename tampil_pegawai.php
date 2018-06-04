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

$sql = "SELECT * FROM pegawai";
$data = $konek->query($sql);

echo "<a href='index.php'>Kembali ke Menu</a>";
echo "<h1>Daftar Pegawai</h1>";
echo "<table border='1'>";
echo "<tr>
        <td>No.</td>
        <td>ID Pegawai</td>
        <td>Nama Pegawai</td>
        <td>Jenis Kelamin</td>
        <td>Umur Pegawai</td>
        <td>Nomor HP</td>
        <td>Alamat Pegawai</td>
        <td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['id_pegawai']."</td>";
    echo "<td>".$row['nama_pegawai']."</td>";
    echo "<td>".$row['jenis_kelamin']."</td>";
    echo "<td>".$row['umur_pegawai']."</td>";
    echo "<td>".$row['no_hp']."</td>";
    echo "<td>".$row['alamat_pegawai']."</td>";
    echo "<td><a href='formupdate_pegawai.php?id_pegawai=".$row['id_pegawai']."'>Edit</a></td>";
    echo "<td><a href='delete_pegawai.php?id_pegawai=".$row['id_pegawai']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
