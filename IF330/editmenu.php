<?php
$dsn = "mysql:host=localhost;dbname=restoran";
$kunci = new PDO($dsn, "root", "");

$sql = "SELECT produk, harga FROM produk;";

$hasil = $kunci->query($sql);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="edituser.css">
</head>
<body>
<h1>List of Menu in Database</h1>
<table border="1">
    <tr>
        <th>Produk</th>
        <th>Harga</th>
    </tr>
    <?php
    while($row = $hasil->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <td><?= $row['produk'] ?></td>
        <td><?= $row['harga'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="button">
    <button id="hapusbutton" onclick="window.location.href='hapusmenu.php'">Hapus Menu</button>
    <button id="tambahbutton" onclick="window.location.href='tambahmenu.php'">Tambah Menu</button>
    <button id="updatebutton" onclick="window.location.href='setharga.php'">Update Harga</button>
    <button id="backbutton" onclick="window.location.href='admin.php'">Back</button>
</div>
</body>
</html>