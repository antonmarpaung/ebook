<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data - Pelanggan </title>
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
				<h4 style="font-family: Oswald; font-size: 22px;"><b>Tambah Pelanggan Baru</b></h4>
			</div>
			<div class="panel-body">
				
				<form method="post" action="pelanggan_aksi.php">
					<div class="form-group">
						<label>Nama Buku</label>
						<input type="text" class="form-control" name="nambuk">
					</div>
					<div class="form-group">
						<label>Nama Pembeli</label>
						<input type="text" class="form-control" name="nampem">
					</div>
					<div class="form-group">
						<label>Alamat Pembeli</label>
						<input type="text" class="form-control" name="alamatpem">
					</div>
					<div class="form-group">
						<label>Jenis Pembayaran</label>
						<select  class="form-control" aria-label="Default select example" name="jenispem">
							<option value="OVO">Metode Pembayaran</option>
							<option value="OVO">Ovo</option>				
							<option value="Dana">Dana</option>			
							<option value="COD">COD</option>
							<option value="Gopay">Gopay</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah Beli</label>
						<input type="number" class="form-control" name="jumbel">
					</div>
					<div class="form-group">
						<label>Kurir</label>
					<select class="form-select" aria-label="Default select example" name="kurir">
						<option >Pilih Kurir</option>
						<option value="Si cepat">Si Cepat</option>
						<option value="JNE">JNE</option>
						<option value="J&T Express">J&T Ekspress</option>
						<option value="Wahana">Wahana</option>
						<option value="POS INDONESIA">Pos Indonesia</option>
					</select>
							
						</select>
					</div>
					<div class="form-group">
						<label>Total Harga</label>
						<input type="number" class="form-control" name="tothar">
					</div>
					<br/>
					<input type="submit" class="btn btn-primary" value="simpan">

				</form>
			</div>
			
		</div>
	</div>
	

</div>
</body>
</html>

