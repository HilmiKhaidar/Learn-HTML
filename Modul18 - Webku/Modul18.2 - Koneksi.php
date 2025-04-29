<?php
$host = "localhost"; // server MySQL
$user = "root";      // username default XAMPP
$pass = "";          // password default XAMPP (kosong)
$db   = "db_webku";  // nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
  die("Koneksi gagall: " . mysqli_connect_error());
}
?>
