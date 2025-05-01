<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Amankan input dengan trim
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Cek apakah field tidak kosong
    if (empty($username) || empty($password)) {
        echo "Username dan password wajib diisi.";
    } else {
        // Cegah SQL injection
        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Login gagal. <a href='login.php'>Coba lagi</a>";
        }
    }
}
?>

<!-- form login -->
<form method="POST" action="">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
