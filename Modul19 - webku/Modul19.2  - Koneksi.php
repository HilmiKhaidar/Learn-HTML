<?php
// Konfigurasi database
$host     = "localhost";    // host database
$user     = "root";         // username MySQL (default XAMPP)
$password = "";             // password MySQL (default kosong di XAMPP)
$database = "db_webku";     // nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
