<?php 

$koneksi = mysqli_connect("localhost", "root", "", "user");


function hapus($id){
	global $koneksi;
	mysqli_query ($koneksi, "DELETE FROM register WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
        
 ?>