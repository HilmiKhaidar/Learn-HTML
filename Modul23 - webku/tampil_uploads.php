<?php
include 'koneksi.php';

$query = "SELECT * FROM galery"; // Pastikan tabel namanya benar!
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Galeri Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .item {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .item img {
            max-width: 200px;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>
    <h1>Galeri Gambar</h1>
    <div class="gallery">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="item">
                <p><strong><?= htmlspecialchars($row['nama']) ?></strong></p>
                <img src="uploads/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama']) ?>">
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
