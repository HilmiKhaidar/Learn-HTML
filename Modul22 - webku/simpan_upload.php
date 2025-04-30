<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "uploads/";

// ✅ Validasi format file
$allowed = ['jpg', 'jpeg', 'png'];
$ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));

if (!in_array($ext, $allowed)) {
    die("Format file tidak diizinkan.");
}

// ✅ Upload & simpan ke DB
if (move_uploaded_file($tmp, $folder . $gambar)) {
    $query = "INSERT INTO galery (nama, gambar) VALUES ('$nama', '$gambar')";
    if (mysqli_query($conn, $query)) {
        echo "Upload berhasil! <a href='tampil_upload.php'>Lihat Gambar</a>";
    } else {
        echo "Gagal simpan ke database: " . mysqli_error($conn);
    }
} else {
    echo "Gagal upload file.";
}
?>
