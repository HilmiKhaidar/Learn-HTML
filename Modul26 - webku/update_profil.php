<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    die("Akses tidak sah. <a href='login.php'>Login dulu</a>");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['user_id'];
    $username = $_POST['username'] ?? '';
    $old = $_POST['old_password'] ?? '';
    $new = $_POST['new_password'] ?? '';

    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$id'"));
    
    if (!$user) {
        die("User tidak ditemukan.");
    }

    if (!password_verify($old, $user['password'])) {
        die("Password lama salah. <a href='edit_profil.php'>Kembali</a>");
    }

    $update_query = "UPDATE users SET username='$username'";
    if (!empty($new)) {
        $hashed = password_hash($new, PASSWORD_DEFAULT);
        $update_query .= ", password='$hashed'";
    }
    $update_query .= " WHERE id='$id'";

    if (mysqli_query($conn, $update_query)) {
        $_SESSION['username'] = $username;
        echo "Profil berhasil diupdate. <a href='dashboard.php'>Kembali</a>";
    } else {
        echo "Gagal update profil.";
    }
} else {
    die("Akses tidak valid.");
}
?>
