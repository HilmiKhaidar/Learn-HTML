<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "db_webku";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
