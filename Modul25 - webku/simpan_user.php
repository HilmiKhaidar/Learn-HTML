<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Cek apakah username sudah ada
$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    echo "Username sudah digunakan. <a href='register.php'>Kembali</a>";
    exit;
}

// Simpan user baru
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "Registrasi berhasil! <a href='login.php'>Login di sini</a>";
} else {
    echo "Gagal menyimpan user: " . mysqli_error($conn);
}
?>
