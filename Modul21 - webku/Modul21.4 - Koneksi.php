<?php
$host = "localhost";     // biasanya localhost
$user = "root";          // default user XAMPP
$pass = "";              // default XAMPP: kosong
$db   = "db_webku";      // ganti dengan nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
