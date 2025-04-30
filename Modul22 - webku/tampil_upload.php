<?php
include 'koneksi.php';

$query = "SELECT * FROM galery";
$result = mysqli_query($conn, $query);
?>

<h2>Galeri Gambar</h2>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p><strong>{$row['nama']}</strong><br>";
    echo "<img src='uploads/{$row['gambar']}' width='200'><br><br></p>";
}
?>
