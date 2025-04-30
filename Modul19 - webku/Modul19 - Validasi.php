<?php

$errors = [];

// Ambil data dari form
$nama = trim($_POST['nama']);
$email = trim($_POST['email']);
$pesan = trim($_POST['pesan']);

// Validasi Nama
if (empty($nama)) {
    $errors[] = "Nama tidak boleh kosong.";
}

// Validasi Email
if (empty($email)) {
    $errors[] = "Email tidak boleh kosong.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

// Validasi Pesan
if (empty($pesan)) {
    $errors[] = "Pesan tidak boleh kosong.";
}

// Jika ada error, tampilkan
if (!empty($errors)) {
    echo "<h3>Terjadi kesalahan:</h3><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul><br><a href='Modul19.1 - Validasi.html'>Kembali</a>";
} else {
    echo "<h2>Data valid! Siap disimpan ke database.</h2>";
    // Di sini kamu bisa lanjutkan ke proses simpan ke database
    // include 'koneksi.php'; dan query INSERT ke tabel
}
?>
