<?php 
include 'koneksi.php';

$idbuk = $_POST['idbuk'];
$nambuk = $_POST['nambuk'];
$nampem = $_POST['nampem'];
$alamatpem=$_POST['alamatpem'];
$jenispem = $_POST['jenispem'];
$jumbel = $_POST['jumbel'];
$kurir = $_POST['kurir'];
$tothar = $_POST['tothar'];

mysqli_query($koneksi, "update pelanggan set namabuku='$nambuk', namapembeli='$nampem', alamatpembeli='$alamatpem', jenispembayaran='$jenispem', jumlahbeli='$jumbel', kurir='$kurir', totalharga='$tothar' where id='$idbuk'");

echo "<script>window.alert('Data berhasil dirubah')
window.location='pelanggan.php'</script>";



 ?>