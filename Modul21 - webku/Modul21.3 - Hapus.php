<?php
include 'Modul21.4 - Koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM kontak WHERE id=$id";

if (mysqli_query($conn, $query)) {
    echo "Data berhasil dihapus. <a href='tampil.php'>Kembali</a>";
} else {
    echo "Gagal hapus: " . mysqli_error($conn);
}
?>
