<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>


<div class="container">
	<br/><br/><br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4 style="font-family: Oswald; font-size: 22px;"><b>Edit Pelanggan</b></h4>
			</div>
			<div class="panel-body">
				<?php 
				include 'koneksi.php';

				$idbuk = $_GET['idbuk'];
				$pelanggan = mysqli_query($koneksi,"select * from pelanggan where id='$idbuk'");

				while ($p=mysqli_fetch_array($pelanggan)) { ?>

					<form method="post" action="pelanggan_update.php">
						<div class="form-group">
							<label>Nama Buku</label>
							<input type="hidden" name="idbuk" value="<?php echo $p ['id']; ?>">
							<input type="text" class="form-control" name="nambuk" value="<?php echo $p['namabuku']; ?>">
						</div>
						<div class="form-group">
							<label>Nama Pembeli</label>
							<input type="text" class="form-control" name="nampem" value="<?php echo $p['namapembeli']; ?>">
						</div>
						<div class="form-group">
							<label>Alamat Pembeli</label>
							<input type="text" class="form-control" name="alamatpem" value="<?php echo $p['alamatpembeli']; ?>">
						</div>
						<div class="form-group">
							<label>Jenis Pembayaran</label>
							<select class="form-control" name="jenispem" value="<?php echo $p['jenispembayaran']; ?>">
							<option value="OVO">Metode Pembayaran</option>
  							<option value="OVO">Ovo</option>
							<option value="Dana">Dana</option>
							<option value="Cod">COD</option>
							<option value="Gopay">Gopay</option>
							</select>
						</div>
						<div class="form-group">
							<label>Jumlah Beli</label>
							<input type="number" class="form-control" name="jumbel" value="<?php echo $p['jumlahbeli']; ?>">
						</div>
						<div class="form-group">
							<label>Kurir</label>
							<select type="text" class="form-control" name="kurir" value="<?php echo $p['kurir']; ?>">
							<option >Pilih kurir</option>
							<option value="Si cepat">Si cepat</option>
							<option value="JNE">JNE</option>
							<option value="J&T Express">J&T Ekspress</option>
							<option value="Wahana">Wahana</option>
							<option value="POS INDONESIA">Pos Indonesia</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Total Harga</label>
							<input type="hidden" class="form-control" name="tothar" value="<?php echo $p['totalharga']; ?>">
							<label><?php echo $p['totalharga']; ?></label>
						</div>
						<br/>
						<input type="submit" class="btn btn-primary" value="Simpan">
					</form>
				<?php } ?>
			</div>
		</div>
		
	</div>
</div>

</body>
</html>