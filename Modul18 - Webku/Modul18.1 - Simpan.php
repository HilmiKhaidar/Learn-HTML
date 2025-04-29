<?php
// Termasuk file koneksi
include 'Modul18.2 - Koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Query untuk memasukkan data ke database
$query = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo "<h2>DData berhasil disimpan!</h2>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
