

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/belibuku5.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<title></title>
</head>
<body>

<header><div class="gambar1" style="width:48px;background-color:#ffffff;border-radius: 10px;height: 60px;"><a href="#"><img class="animate__slideInDown" src="img/pola.png" style="width:35px; margin-top: 10px; margin-left: 6.5px;"></div>
	<nav>
		<ul class="order">
			<li><a href="index.php"><img src="img/ic3.ico"> Beranda</a></li>
			<li><a href="index.php?id=#gambar-bocah"> <img src="img/ic1.ico"> Informasi</a></li>
		</ul>
	</nav>
	<a href="logout_user.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" ><button class="btn-1"><img src="img/keluar.png" style="width:30px"> Keluar </button></a>
	</header>

	<?php 
 include 'sambung.php';
 include 'dataquery.php';

 $id=$_GET['id'];
 $tampil= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
 $tampil2= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
 $tampil3= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
 $tampil4= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
 $tampil5= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
 $tampil6= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
  $tampil7= mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");

while ($buku= mysqli_fetch_array($tampil)) {?>

<form action="jumlah.php" method="POST">

 <div class="form-style">

  <div class="card-2">
  	<img src="img/<?=$buku['gambar']?>" style="width: 100%; height: 100%;" >
  </div> 
   <div class="card-1">	
	<div class="form-group">
		<h4>Nama Buku</h4>
		<h5><?php echo $buku['namabuku'] ;?></h5>
		<input type="hidden" name="id" value="<?php echo $syntac['idbuku']; ?>"> 
		<input type="hidden" name="nambuk" class="form-control"value="<?php echo $buku['namabuku'] ;?>">
	</div>
	<div class="form-group-1">
		<h4>Genre</h4>
		<h5><?php echo $buku['Genre']; ?></h5>
		<input type="hidden" class="form-control" name="genre" value="<?php echo $buku['Genre']; ?>">
	</div>
	<div class="form-group-2">
		<h4>Harga Buku </h4>
		<h5>Rp. <?php echo number_format($buku['hargabuku']); ?> </h5>	
		<input type="hidden" class="form-control" name="harga" value="<?php echo $buku['hargabuku']; ?>">
	</div>
	<div class="form-group-3">
		<h4>Tanggal Rilis</h4>
		<h5><?php echo $buku['tglrilis']; ?> </h5>	
		
	</div>
	<div class="form-group-4"></div>
	<div class="form-group-4">
		<h4>Nama Pembeli</h4>
		<input type="text" class="form-control" name="nampel" placeholder="Masukan Nama Lengkap" required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group-4">	
		<h4>Alamat</h4>
		<textarea class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap" required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')"></textarea>
	</div>	
	<div class="form-group-5">	
		<h5>Jenis Pembayaran</h5>
		<select class="form-select" aria-label="Default select example" name="jenisbar" required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')">
			<option value="OVO">Jenis Pembayaran</option>
  				<option value="OVO">Ovo</option>
				<option value="Dana">Dana</option>
				<option value="Cod">Cod</option>
				<option value="Gopay">Gopay</option>
		</select>

	</div>
	<div class="form-group-5">	
		<h5>Kurir</h5>
		<select class="form-select" aria-label="Default select example" name="kurir" required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')">
  			<option >Kurir</option>
			<option value="Si cepat">Si cepat (Rp.12.000)</option>
			<option value="JNE">JNE (Rp.22.000)</option>
			<option value="J&T Express">J&T Ekspress (Rp.12.400)</option>
			<option value="Wahana">Wahana (Rp.12.000)</option>
			<option value="POS INDONESIA">Pos Indonesia (Rp.14.000)</option>
		</select>
	</div>
	<div class="form-group-6">		
		<h5>Jumlah Pembelian</h5>
		<input type="number" class="form-control" name="jumpel" placeholder="Jika Membeli Selusin/Lebih Akan Mendapatkan Diskon" required oninvalid="this.setCustomValidity('Mohon Isi Sesuai Dengan Ketentuan')" oninput="this.setCustomValidity('')">
	</div>
		<div class="form-group-5">
			<input type="submit" value="Beli" class="btn btn-primary" >
			<div class="button" style="width:120px;position: absolute; margin-left: 6%;"><a href="index.php?#buku" class="btn btn-primary">Kembali</a></div>
		</div>
		</form>
<?php } ?>

	</div> 
</div>


</body>
</html>