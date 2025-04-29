<?php
// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Tampilkan data
echo "<h2>Data yang Diterima</h2>";
echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Pesan: " . nl2br(htmlspecialchars($pesan));
?>
