<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "Halo, " . $_SESSION['username'] . "!<br>";
echo "<a href='edit_profil.php'>Edit Profil</a> | <a href='logout.php'>Logout</a>";
