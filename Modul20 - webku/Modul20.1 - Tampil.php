<?php
include 'Modul20 - Koneksi.php';

$query = "SELECT * FROM kontak";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kontak</title>
</head>
<body>

<h2>Daftar Kontak</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($row['pesan'])) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
