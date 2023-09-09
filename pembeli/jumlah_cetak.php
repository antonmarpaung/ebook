<!DOCTYPE html>
<html>
<head>
    <title>DATA TRANSAKSI BUKU</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="css/index3.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>


<?php 
include 'koneksi.php';
include 'dataquery.php';


$nambuku=$_POST['namabuk'];
$genre=$_POST['jenre'];
$pembeli=$_POST['costumer'];
$alamat=$_POST['address'];
$jenpar=$_POST['jenisbayar'];
$jumpel=$_POST['jmlh'];
$kurir=$_POST['pengantar'];
$totharga=$_POST['totharga'];
$totbayar =$_POST['bayar'];

 ?>


<header><div class="gambar1" style="width:48px;background-color:#ffffff;border-radius: 10px;height: 60px;"><a href="#"><img class="animate__slideInDown" src="img/pola.png" style="width:35px; margin-top: 10px; margin-left: 6.5px;"></div>
    <nav>
        <ul class="order">
            <li><a href="index.php"><img src="img/ic3.ico"> Beranda</a></li>
            <li><a href="index.php?id=#gambar-bocah"> <img src="img/ic1.ico"> Informasi</a></li>
        </ul>
    </nav>
    <a href="#"><button class="btn-1"><img src="img/login.png" style="width:30px"> Login </button></a>
    </header>


 <div class="container">;
    <div class="col-md-10 col-md-offset-1"  style="background-color: #133774; margin-top: 8%; border-radius: 20px; height: 500px;" >
        <br/> 
        
    <center><h3 style="font-family: Zen Dots; color : white;"><b>DATA TRANSAKSI BUKU</b></h3></center>

 <form action="cetak_print.php" method="POST">
 <table class="table" style="color: white; font-size: 14px; width: 100%; font-size: 14px;"  >
    <tr>
        <th>Nama buku</th>
        <th>:</th>
        <td><?php echo "$nambuku" ?></td>
        <input type="hidden" name="tsbuku" value="<?php echo "$nambuku" ?>">
    </tr>
    <tr>
        <th>Genre</th>
        <th>:</th>
        <td><?php echo "$genre" ?></td>
        <input type="hidden" name="tsgenre" value="<?php echo "$genre" ?>">
    </tr>
    <tr>
        <th>Nama Pembeli</th>
        <th>:</th>
        <td><?php echo "$pembeli" ?></td>
        <input type="hidden" name="tsnampem" value="<?php echo "$pembeli" ?>">
    </tr>
    <tr>
        <th>Alamat</th>
        <th>:</th>
        <td><?php echo "$alamat" ?></td>
        <input type="hidden" name="tsalamat" value="<?php echo "$alamat" ?>">
    </tr>
    <tr>
        <th>Jenis Pembayaran</th>
        <th>:</th>
        <td><?php echo "$jenpar" ?></td>
        <input type="hidden" name="tsjenpar" value="<?php echo "$jenpar" ?>">
    </tr>
    <tr>
        <th>Pilihan Kurir</th>
        <th>:</th>
        <td><?php echo "$kurir" ?></td>
        <input type="hidden" name="tskurir" value="<?php echo "$kurir" ?>">
    </tr>
    <tr>
        <th>Jumlah Pembelian</th>
        <th>:</th>
        <td><?php echo "$jumpel" ?> Pcs</td>
        <input type="hidden" name="tsjumpel" value="<?php echo "$jumpel" ?>">
    </tr>
    <tr>
        <th>Total Harga</th>
        <th>:</th>
        <td>Rp. <?php echo number_format($totharga);
         ?></td>
         <input type="hidden" name="tstotharga" value="<?php echo "$totharga" ?>">
    </tr>
    <tr>
        <th>Total Bayar</th>
        <th>:</th>
        <td>Rp. <?php echo number_format($totbayar); ?></td>
        <input type="hidden" name="tstotbayar" value="<?php echo "$totbayar" ?>">
    </tr>
 </table>
<!-- <script type="text/javascript" >
        window.print();
    </script> -->
<a target="_blank" href="cetak_print.php" class ="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i>CETAK</a>
<div class="logout" style="float: right; ">
   <a target="_blank" href="index.php" class ="btn btn-sm btn-primary" style="background-color: orange;"><i class="glyphicon glyphicon-arrow-left"></i>BACK</a>

</div>
</form>
<!-- <div class="col-md-8 col-md-offset-1" style="width:120px;position: absolute; margin-left: 83%; font-size: 15px; font-family: San Francisco;"><a href="index.php?#buku" class="btn btn-warning" style="color : black;">Home</a></div> -->



    




</div>
</div>
  
 </body>
</html>

