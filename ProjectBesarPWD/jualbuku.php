
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
 			<td><input type="text" name="nambuk" class="form-control" required></td>
 		</tr>
    </div>
    <div class="form-group">
 		<tr>
 			<td>Nama Pengarang</td>
 			<td><input type="text" name="nampeng" class="form-control" pattern="[A-Za-z]*" required></td>
 		</tr>
    </div>

    <div class="form-group">
        <tr>
            <td>Genre</td>
           <!-- REVISI INPUT GENRE HANYA DAPAT DI ISI OLEH HURUF -->
            <td><input type="text" name="genre" class="form-control" pattern="[A-Za-z]*" required></td>
        </tr>
    </div>       
    <div class="form-group">
 		<tr>
 			<td>Tanggal Rilis</td>
 			<td><input type="date" name="tanggal" class="form-control" required></td>
 		</tr>
    </div>   

    <div class="form-group">
 		<tr>
 			<td>Harga Buku</td>
            <!-- REVISI HARGA HANYA DAPAT DI ISI DENGAN ANGKA -->
 			<td><input type="text" name="harga" class="form-control" pattern="[0-9]*" required></td>
 		</tr>
    </div>
    <div class="form-group">
 		<tr>
 			<td>Stock</td>
 			<td><input type="text" name="stock" class="form-control" required onkeypress="return hanyaAngka(event)"/></td>

 		</tr>
    </div>
    <div class="form-group">
        <tr>
            <td>Gambar</td>
             <!-- REVISI GAMBAR HNYA DAPAT DI ISI OLEH EKSTENSI JPG, JPEG, PNG -->
            <td><input type="file" name="file" id="file" class="form-control" onchange="return validasiEkstensi()"/></td>
        </tr>
    </div>
    
    <br/>
 		<input type="submit" value="simpan" class="btn btn-primary" name="simpan">
 	</form>
       </div>
            </div>            
        </div>
    </div>

<script>
    function validasiEkstensi(){
    var inputFile = document.getElementById('file');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang dengan ekstensi .jpeg/.jpg/.png/.gif');
        inputFile.value = '';
        return false;
    }else{
        // Preview gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').innerHTML = '<img src="'+e.target.result+'" style="height:300px"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}

</script>

     <script>

//-----------------------------REVISI STOCK HANYA BISA DI ISI OLEH ANGKA------------------------------------------//
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>
    
 </body>
 </html>

