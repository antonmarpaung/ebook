
 <!DOCTYPE html>

 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Input Data - Buku Online</title>
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
                <h4 style="font-family: Oswald; font-size: 22px;" ><b>Tambah Buku Baru</b></h4>
            </div>    
            <div class="panel-body" style=" width: 130%;">
                
 	<form action="aksibuku.php" method="POST" enctype="multipart/form-data"> 
    <div class="form-group">
        <tr>
 			<td>Nama Buku</td>
 			<td><input type="text" name="nambuk" class="form-control"></td>
 		</tr>
    </div>
    <div class="form-group">
 		<tr>
 			<td>Nama Pengarang</td>
 			<td><input type="text" name="nampeng" class="form-control"></td>
 		</tr>
    </div>
    <div class="form-group">
        <tr>
            <td>Genre</td>
            <td><input type="text" name="genre" class="form-control"></td>
        </tr>
    </div>       
    <div class="form-group">
 		<tr>
 			<td>Tanggal Rilis</td>
 			<td><input type="date" name="tanggal" class="form-control"></td>
 		</tr>
    </div>   

    <div class="form-group">
 		<tr>
 			<td>Harga Buku</td>
 			<td><input type="number" name="harga" class="form-control"></td>
 		</tr>
    </div>
    <div class="form-group">
 		<tr>
 			<td>Stock</td>
 			<td><input type="number" name="stock" class="form-control"></td>
 		</tr>
    </div>
    <div class="form-group">
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="file" class="form-control"></td>
        </tr>
    </div>
    
    <br/>
 		<input type="submit" value="simpan" class="btn btn-primary" name="simpan">
 	</form>
       </div>
            </div>            
        </div>
    </div>
 </body>
 </html>