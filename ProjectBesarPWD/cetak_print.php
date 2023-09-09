<!DOCTYPE html>
<html>
<head>
    <title>DATA TRANSAKSI BUKU</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>


<?php 
include 'sambung.php';
include 'dataquery.php';


$nambuku=$_POST['tsbuku'];
$genre=$_POST['tsgenre'];
$pembeli=$_POST['tsnampem'];
$alamat=$_POST['tsalamat'];
$jenpar=$_POST['tsjenpar'];
$jumpel=$_POST['tsjumpel'];
$kurir=$_POST['tskurir'];
$totharga=$_POST['tstotharga'];
$totbayar =$_POST['tstotbayar'];


 ?>



 <div class="container">;
    <div class="col-md-10 col-md-offset-1"  style="background-color: #133774; margin-top: 8%; border-radius: 20px; height: 500px;" >
        <br/> 
        
    <center><h3 style="font-family: Zen Dots; color : white;"><b>DATA TRANSAKSI BUKU</b></h3></center>

 <table class="table" style="color: white; font-size: 14px; width: 100%; font-size: 14px;"  >
    <tr>
        <th>Nama buku</th>
        <th>:</th>
        <td><?php echo "$nambuku" ?></td>
    </tr>
    <tr>
        <th>Genre</th>
        <th>:</th>
        <td><?php echo "$genre" ?></td>
    </tr>
    <tr>
        <th>Nama Pembeli</th>
        <th>:</th>
        <td><?php echo "$pembeli" ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <th>:</th>
        <td><?php echo "$alamat" ?></td>
    </tr>
    <tr>
        <th>Jenis Pembayaran</th>
        <th>:</th>
        <td><?php echo "$jenpar" ?></td>
    </tr>
    <tr>
        <th>Pilihan Kurir</th>
        <th>:</th>
        <td><?php echo "$kurir" ?></td>
    </tr>
    <tr>
        <th>Jumlah Pembelian</th>
        <th>:</th>
        <td><?php echo "$jumpel" ?> Pcs</td>
    </tr>
    <tr>
        <th>Total Harga</th>
        <th>:</th>
        <td>Rp. <?php echo number_format($totharga);
         ?></td>
    </tr>
    <tr>
        <th>Total Bayar</th>
        <th>:</th>
        <td>Rp. <?php echo number_format($totbayar); ?></td>
    </tr>
 </table>
<!-- <script type="text/javascript" >
        window.print();
    </script> -->

</div>
</div>
<script>
    window.print();
</script>
  
 </body>
</html>

