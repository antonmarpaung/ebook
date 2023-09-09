<?php 
include 'koneksi.php';

$nambuk = $_POST['nama_buku'];
$nampem	  = $_POST['nama_pembeli'];
$alamatpem = $_POST['alamat_pembeli'];
$jenispem = $_POST['jenis_pembayaran'];
$jumbel = $_POST['jumlah_beli'];
$kurir = $_POST['kurir_'];
$tothar = $_POST['total_harga'];


mysqli_query($koneksi, "insert into pelanggan values('', '$nambuk', '$nampem', '$alamatpem', '$jenispem', '$jumbel', '$kurir', '$tothar')");



echo "<script>window.alert('Data berhasil disimpan')
window.location='pelanggan.php'</script>";



 ?>