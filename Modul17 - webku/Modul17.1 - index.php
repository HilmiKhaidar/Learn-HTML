<?php
// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Format isi data
$data = "Nama: $nama\nEmail: $email\nPesan: $pesan\n---\n";

// Simpan ke file
$file = fopen("data.txt", "a"); // "a" = append (tambah ke akhir)
fwrite($file, $data);
fclose($file);

// Konfirmasi
echo "<h2>Data berhasil disimpan!</h2>";
echo "<a href='formulir.html'>Kembali ke Form</a>";
?>
