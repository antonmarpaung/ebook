<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA TRANSAKSI BUKU</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index3.css"> 
    <link rel="stylesheet" type="text/css" href="css/belibuku3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title></title>
</head>
<body>

    <header><div class="gambar1" style="width:48px;background-color:#ffffff;border-radius: 10px;height: 60px;"><a href="#"><img class="animate__slideInDown" src="img/pola.png" style="width:35px; margin-top: 10px; margin-left: 6.5px;"></div>
    <nav>
        <ul class="order">
            <li><a href="#"><img src="img/ic3.ico"> Beranda</a></li>
            <li><a href="#gambar-bocah"> <img src="img/ic1.ico"> Informasi</a></li>
        </ul>
    </nav>
    <a href="$"><button class="btn-1"><img src="img/login.png" style="width:30px"> Login </button></a>
    </header>
 

<?php 
include 'sambung.php';
include 'dataquery.php';


$id=$_POST['id'];
$namabuku=$_POST['nambuk'];
$genre=$_POST['genre'];
$pembeli=$_POST['nampel'];
$alamat=$_POST['alamat'];
$jenpar=$_POST['jenisbar'];
$jumpel=$_POST['jumpel'];
$kurir=$_POST['kurir'];
$harga=$_POST['harga'];



if ($kurir=="Si cepat") {
    $hargakurir=12000;
} elseif ($kurir=="JNE") {
    $hargakurir=22000;
} elseif ($kurir=="J&T Express") {
    $hargakurir=12400;
}elseif ($kurir=="Wahana") {
    $hargakurir=12000;
}elseif ($kurir=="POS INDONESIA") {
    $hargakurir=14000;
} 


 ?>

 <div class="container"> 
    <div class="col-md-10 col-md-offset-1" style="background-color: #133774; margin-top: 8%; border-radius: 20px;" >
        <br/> <br/> 

         <center><h3 style="font-family: Zen Dots; color : white;">DATA TRANSAKSI BUKU</h3></center>
<br/>

<form action="bayar.php" method="post">
 <table class="table" style="color : white; font-size: 15px;">
 	<tr>
 		<td>Nama buku</td>
 		<td>:</td>
 		<td><?php echo "$namabuku" ?></td>
        <input type="hidden" name="namabuku" value="<?php echo $namabuku ?>">
 	</tr>
 	<tr>
 		<td>Genre</td>
 		<td>:</td>
 		<td><?php echo "$genre" ?></td>
        <input type="hidden" name="jenre" value="<?php echo $genre ?>">
 	</tr>
 	<tr>
 		<td>Nama Pembeli</td>
 		<td>:</td>
 		<td><?php echo "$pembeli" ?></td>
        <input type="hidden" name="costumer" value="<?php echo $pembeli ?>">
 	</tr>
 	<tr>
 		<td>Alamat</td>
 		<td>:</td>
 		<td><?php echo "$alamat" ?></td>
         <input type="hidden" name="address" value="<?php echo $alamat ?>">
 	</tr>
 	<tr>
 		<td>Jenis Pembayaran</td>
 		<td>:</td>
 		<td><?php echo "$jenpar" ?></td>
         <input type="hidden" name="jenisbayar" value="<?php echo $jenpar ?>">
 	</tr>
 	<tr>
 		<td>Pilihan Kurir</td>
 		<td>:</td>
 		<td><?php echo "$kurir" ?></td>
         <input type="hidden" name="pengantar" value="<?php echo $kurir ?>">
 	</tr>
    <tr>
        <td>Harga Ongkir</td>
        <td>:</td>
        <td>Rp. <?php echo number_format($hargakurir)?></td>
    </tr>
 	<tr>
 		<td>Jumlah Pembelian</td>
 		<td>:</td>
 		<td><?php echo "$jumpel" ?> Pcs</td>
         <input type="hidden" name="jmlh" value="<?php echo $jumpel ?>">
 	</tr>
 	<tr>
 		<td>Total Harga</td>
 		<td>:</td>
 		<td>Rp. <?php
 			$tothar=$harga*$jumpel+$hargakurir;
 			echo number_format($tothar);
 		 ?></td>
          <input type="hidden" name="totharga" value="<?php echo $tothar ?>">
 	</tr>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><?php if ($jumpel>=20) {
                      $diskon=88/100;
                      $totbar=$tothar*$diskon;
                       echo "Diskon 12%";
            }elseif ($jumpel>=15) {
                        $diskon=90/100;
                        $totbar=$tothar*$diskon;
                     echo "Diskon 10%";  
            }elseif ($jumpel>=12) {
                        $diskon=95/100;
                        $totbar=$tothar*$diskon;
                     echo "Diskon 5%";
            }elseif ($jumpel<12) {
                $totbar=$tothar;
                echo "Maaf Belom Ada Diskon";
            }?>
            <input type="hidden" name="bayar" value="<?php echo $totbar; ?>">        
        </td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:</td>
        <td>Rp. <?php echo number_format($totbar);
         ?></td>
    </tr>

 </table>
<div class="col-md-8 col-md-offset-1" style="font-family: zen dots; color: white;">
  <input style="width: 100px; height:30px; border-radius: 10px;" type="submit" value="BAYAR" class="btn btn-danger pull-right"><br/><br><br>
    </div>
    <div class="col-md-25 col-md-offset-1" >
            <p style="font-family: Signika negative; font-size: 12px; color: white;">Mohon Cek Kembali, Sebelum Anda KLik BAYAR !</p>
    </div>
</div>
 </form>
</div>
</body>