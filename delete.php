<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'sindu'; // User Server
$db_pass = 'sindu123'; // Password Server
$db_name = 'berkah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM keranjang';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
while($data = mysqli_fetch_array($query))
$id = $data["kode_produk"];

$del = "DELETE FROM `berkah`.`keranjang` WHERE `keranjang`.`kode_produk` = '$id';";
if($del)
    include"keranjang.php";

?>