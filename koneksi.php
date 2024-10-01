<?php
$servername = "127.0.0.1";
$database = "berkah";
$username = "sindu";
$password = "sindu123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>