<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "user";

$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$idbuku = $_GET['id'];
$sql = "DELETE FROM jualbuku WHERE idbuku = $idbuku";
$query = mysqli_query($conn, $sql);

echo"
	<script> 
	alert('Data Berhasil Dihapus');
	document.location.href	 = 'adminbuku.php';
	</script>";
?>