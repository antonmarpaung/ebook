<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nambuk = $_POST['nambuk'];
$nampeng = $_POST['nampeng'];
$genre=$_POST['genre'];
$harbuk = $_POST['harga'];
$stokbuk = $_POST['stock'];

mysqli_query($koneksi, "update jualbuku set namabuku='$nambuk', namapengarang='$nampeng', Genre='$genre', hargabuku='$harbuk', stock='$stokbuk' where idbuku='$id'");

echo "<script>window.alert('Data berhasil dirubah')
window.location='tampildatabuku.php'</script>";



 ?>