<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan Data Ebook</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel">
			<div class="panel-heading">
				<h4 style="font-family: Oswald; font-size:22px;"><b>Data Buku</b></h4>
			</div>
			<div class="panel-body">
<br/><br/>

<table class ="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>Nama Buku</th>
		<th>Nama Pengarang</th>
		<th>Genre</th>
		<th>Tanggal Rilis</th>
		<th>Harga Buku</th>
		<th>Stock</th>
		<th>Cover</th>
	</tr>
	<?php 
	include 'koneksi.php'; 
	$id = 1;
	$syntac = mysqli_query($koneksi, "select * from jualbuku where idbuku order by Genre='Horor,Romantis' desc");
	while ($tampil=mysqli_fetch_array($syntac)) {
		 ?>
	<tr>
		<td><?php echo $id++;?></td>
		<td><?php echo $tampil['namabuku']; ?></td>
		<td><?php echo $tampil['namapengarang']; ?></td>
		<td><?php echo $tampil['Genre']; ?></td>
		<td><?php echo $tampil['tglrilis']; ?></td>
		<td><?php echo $tampil['hargabuku']; ?></td>
		<td><?php echo $tampil['stock']; ?></td>
		<td><img src="img/<?=$tampil['gambar']?>" width="25"></td>

		<td>
		<a href="jualbuku_edit.php?id=<?php echo $tampil ['idbuku']; ?>" class = "btn btn-sm btn-warning">Edit</a>
		<a href="jualbuku_hapus.php?id=<?php echo $tampil ['idbuku']; ?>" class = "btn btn-sm btn-danger">Hapus</a>
		<a href="jualbuku.php?id=<?php echo $tampil ['idbuku'];  ?>" class ="btn btn-sm btn-info pull-right">Tambah</a>
	</td>

	</tr>
	<?php } ?>
</table>
</div>
</div>
</div>


</body>
</html>