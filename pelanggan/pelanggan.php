
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Pelanggan E-bbok</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>



<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4 style="font-family: Oswald; font-size: 22px;">Data Pelanggan</h4>
		</div>
		<div class="panel-body">
			
		<br/>
		

		<table class="table table-bordered table-striped">
			<tr>
				<th width="1%">No</th>
				<th>Nama Buku</th>
				<th>Nama Pembeli</th>
				<th>Alamat Pembeli</th>
				<th>Jenis Pembayaran</th>
				<th>Jumlah Beli</th>
				<th>Kurir</th>
				<th>Total Harga</th>
				<th width="15%">Aksi</th>
			</tr>
			<?php 
			include "sambung.php";
			$idbuk = 1;
			$pelanggan = mysqli_query($koneksi, "SELECT * FROM  pelanggan where id order by namapembeli asc");
			while ($p = mysqli_fetch_array($pelanggan)) {
			 ?>
			 <tr>
			 	<td><?php echo $idbuk++; ?></td>
			 	<td><?php echo $p['namabuku']; ?></td>
			 	<td><?php echo $p['namapembeli']; ?></td>
			 	<td><?php echo $p['alamatpembeli']; ?></td>
			 	<td><?php echo $p['jenispembayaran']; ?></td>
			 	<td><?php echo $p['jumlahbeli']; ?></td>	
			 	<td><?php echo $p['kurir']; ?></td>
			 	<td><?php echo $p['totalharga']; ?></td>	
			 	<td>
			 		<a href="pelanggan_edit.php?idbuk=<?php echo $p['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
			 		<a href="pelanggan_hapus.php?idbuk=<?php echo $p['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
			 	
			 	</td>
			 </tr>
			<?php } ?>

		</table>

		</div>
	</div>
</div>

</body>
</html>
