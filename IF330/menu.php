<?php
session_start();
require_once('db.php');

// Inisialisasi variabel isAdmin
$isAdmin = false;

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Periksa peran pengguna dengan query ke database
    $sql = "SELECT u.role FROM user u
            JOIN loggedinuser lu ON u.username = lu.username
            WHERE u.username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && $row['role'] === "Admin") {
        $isAdmin = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menustyles.css">
</head>
<body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a class="active" href="menu.php">Menu</a>
  <a href="login.php">Login</a>
  <a href="signup.php">Sign Up</a>
  <a href="logout.php">Logout</a>
  <a href="cart.php">Pesanan</a>
  <?php if ($isAdmin) : ?>
    <a href="admin.php">Admin</a>
    <?php endif; ?>
</div>

<div class="contentdiv" style="padding-left:16px">
  <div class="contentrestoran">
    <h1>IF330</h1>
</div>

<div class="text">
    <h3>Pilih Kategori Menu</h3>
</div>

<div class="menubutton">
  <a href="makanan.php" class="button">Makanan</a>
  <a href="minuman.php" class="button">Minuman</a>
</div>

</body>
</html>