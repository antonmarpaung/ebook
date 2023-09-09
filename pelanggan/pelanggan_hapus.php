<?php 

include 'koneksi.php';

$idbuk = $_GET['idbuk'];

mysqli_query($koneksi, "delete from pelanggan where id='$idbuk'");

echo "<script>window.alert('Data berhasil di hapus')
window.location='pelanggan.php'</script>";
 ?>