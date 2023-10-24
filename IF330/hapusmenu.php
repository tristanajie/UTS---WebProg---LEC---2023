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
    <title>Hapus Menu</title>
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
<form action="hapusmenu_process.php" method="post">
<div class="button">
    <label id="produklabel">Delete Menu</label>
    <input type="text" name="produk" placeholder="Enter Menu" /><br />
    <button id="hapusbtn" type="submit">Hapus</button>
    <button id="backbutton" type="button" onclick="window.location.href='editmenu.php'">Back</button>
    </div>
</form>
</body>
</html>