<?php
include 'Modul21.4 - Koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM kontak WHERE id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Kontak</h2>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $data['email']; ?>"><br><br>

    <label>Pesan:</label><br>
    <textarea name="pesan"><?= $data['pesan']; ?></textarea><br><br>

    <input type="submit" value="Update">
</form>

</body>
</html>
