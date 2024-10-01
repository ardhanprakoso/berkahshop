<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'sindu'; // User Server
$db_pass = 'sindu123'; // Password Server
$db_name = 'berkah'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$del = "TRUNCATE `keranjang`;";
if($del)
    include"keranjang.php";

?>