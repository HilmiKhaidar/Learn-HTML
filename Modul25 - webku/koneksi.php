<?php
$host = "localhost";     // host database, biasanya localhost
$user = "root";          // username MySQL di XAMPP biasanya 'root'
$pass = "";              // password kosong (default XAMPP)
$db   = "db_webku";      // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
