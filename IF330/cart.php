<?php
// Buat koneksi ke database "restoran" (sesuaikan dengan pengaturan database Anda)
$dsn = "mysql:host=localhost;dbname=restoran";
$db = new PDO($dsn, "root", "");

// Query untuk memeriksa apakah tabel "loggedinuser" kosong atau tidak
$sql = "SELECT * FROM loggedinuser";
$result = $db->query($sql);

// Periksa apakah tabel "loggedinuser" memiliki data
if ($result->rowCount() == 0) {
    // Tabel "loggedinuser" kosong, pengguna belum login
    // Redirect pengguna ke halaman login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<div class="topnav">
  <a href="home.php">Home</a>
</div>
<table border="1">
    <tr>
        <th>Produk</th>
        <th>Harga</th>
    </tr>
    <?php
    // Query untuk mengambil data dari tabel "cart" dalam database "restoran"
    $sqlCart = "SELECT * FROM cart";
    $resultCart = $db->query($sqlCart);

    while ($rowCart = $resultCart->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
        <td ><?= $rowCart['produk'] ?></td>
        <td style="text-align: right"><?= $rowCart['harga'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="boxbawah">
<table border="1">
    <th>Total</th>
    <?php
    // Query untuk mengambil data dari tabel "cart" dalam database "restoran"
    $sqlCart = "SELECT sum(harga) FROM cart";
    $resultCart = $db->query($sqlCart);

    while ($rowCart = $resultCart->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
        <td style="text-align: right"><?= $rowCart['sum(harga)'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="button-container">
    <button id="backbutton" onclick="window.location.href='menu.php'">Back</button>
    <button id="hapusbutton" onclick="window.location.href='hapuspesan.php'">Hapus</button>
    <button id="pesanbutton" onclick="window.location.href='thankyou_process.php'">Pesan</button>
</div>
</body>
</html>
