<?php 

include 'sambung.php';



$tampil= mysqli_query($koneksi, "select * from jualbuku where Genre='Horor' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil);


$tampil2 = mysqli_query($koneksi, "select * from jualbuku where Genre='Romantis' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil2);


$tampil3= mysqli_query($koneksi, "select * from jualbuku where Genre='Advanture' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil3);


$tampil4 = mysqli_query($koneksi, "select * from jualbuku where Genre='Komedi' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil4);


$tampil5 = mysqli_query($koneksi, "select * from jualbuku where Genre='Sejarah' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil5);

$tampil6 = mysqli_query($koneksi, "select * from jualbuku where Genre='Anak' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil6);

$tampil7 = mysqli_query($koneksi, "select * from jualbuku where Genre='Komik' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil7);

$tampil8 = mysqli_query($koneksi, "select * from jualbuku where Genre='Drama' order by hargabuku asc");
$buku= mysqli_fetch_array($tampil8);



 ?>
