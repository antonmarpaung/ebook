<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Buku</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<br/><br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4 style="font-family: Oswald; font-size: 22px;"><b>Edit Data Buku</b></h4>
			</div>
			<div class=" panel-body"> 
	<?php 
include 'koneksi.php';

$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "select * from jualbuku where idbuku='$id'");
	
while ($syntac= mysqli_fetch_array($tampil)) {?>
<form action="jualbuku_update.php" method="POST">
	<div class="form-group">
		<label>Nama Buku</label>
		<input type="hidden" name="id" value="<?php echo $syntac['idbuku']; ?>"> 
		<input type="text" name="nambuk" class="form-control"value="<?php echo $syntac['namabuku'] ;?>">
	</div>	
	<div class="form-group">
		<label>Nama Pengarang</label>
		<input type="text" class="form-control" name="nampeng" value="<?php echo $syntac['namapengarang']; ?>">
	</div>
	<div class="form-group">
		<label>Genre</label>
		<input type="text" class="form-control" name="genre" value="<?php echo $syntac['Genre']; ?>">
	</div>
	<div class="form-group">		
		<label>Harga</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $syntac['hargabuku']; ?>">
	</div>
	<div class="form-group">	
		<label>Stock</label>
		<input type="number" class="form-control" name="stock" value="<?php echo $syntac['stock']; ?>">
	</div>	
		<br/>
		<input type="submit" value="simpan" class="btn btn-primary" >

		</form>
	<?php } ?>

	</div>
			
		</div>
		</div>
	</div>

		
	





</body>
</html>