

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/belibuku3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title></title>
</head>
<body>


<?php 
include 'sambung.php';
include 'dataquery.php';


$nambuku=$_POST['namabuku'];
$genre=$_POST['jenre'];
$pembeli=$_POST['costumer'];
$alamat=$_POST['address'];
$jenpar=$_POST['jenisbayar'];
$jumpel=$_POST['jmlh'];
$kurir=$_POST['pengantar'];
$totharga=$_POST['totharga'];
$totbar=$_POST['bayar'];


mysqli_query($koneksi,"INSERT into pelanggan values ('','$nambuku','$pembeli','$alamat','$jenpar','$jumpel','$kurir','$totharga')");


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

 <div class="container">
    <div class="col-md-10 col-md-offset-1"  style="background-color: #133774; margin-top: 8%; border-radius: 20px; height: 500px; margin-left:8%" >
        <br/> 
        
    <center><h3 style="font-family: Zen Dots; color : white;"><b>DATA TRANSAKSI BUKU</b></h3></center>

<div class="container">
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
        <td>Rp. <?php echo number_format($totbar); ?></td>
        <input type="hidden" name="tstotbayar" value="<?php echo "$totbar" ?>">
    </tr>
 </table>
</div>

<div style="width:290px; display: flex; margin-left: 33%; justify-content: space-between;">
  <input style="width: 100px; height:30px; border-radius: 10px; font-family:signika negative" type="submit" value="CETAK" class ="btn btn-sm btn-primary">
    
   <a style="width: 100px; height:30px; border-radius: 10px; font-family:signika negative" target="_blank" href="index.php" class ="btn btn-sm btn-primary" style="background-color: orange;"><i class="glyphicon glyphicon-arrow-left"></i>BACK</a>
</div>
</form>


</div>
</div>


</body>