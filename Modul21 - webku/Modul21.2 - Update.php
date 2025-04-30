<?php
include 'Modul21.4 - Koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = "UPDATE kontak SET nama='$nama', email='$email', pesan='$pesan' WHERE id=$id";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil diperbarui. <a href='tampil.php'>Kembali</a>";
} else {
    echo "Gagal update: " . mysqli_error($conn);
}
?>
