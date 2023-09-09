<?php 
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from jualbuku where idbuku='$id'");

echo "<script>window.alert('Data berhasil di hapus')
window.location='tampildatabuku.php'</script>";


 ?>