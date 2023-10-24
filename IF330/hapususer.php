<?php
$dsn = "mysql:host=localhost;dbname=restoran";
$kunci = new PDO($dsn, "root", "");

$sql = "SELECT username, first_name, last_name, role, birth_date, jenis_kelamin FROM user;";

$hasil = $kunci->query($sql);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus User</title>
    <link rel="stylesheet" href="edituser.css">
</head>
<body>
<h1>List of People in Database</h1>
<table border="1">
    <tr>
        <th>Username</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Role</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
    </tr>
    <?php
    while($row = $hasil->fetch(PDO::FETCH_ASSOC)){
    ?>
    <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['role'] ?></td>
        <td><?= $row['birth_date'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<form action="hapususer_process.php" method="post">
<div class="button">
    <label id="usernamelabel">Delete User</label>
    <input type="text" name="username" placeholder="Enter Username" />
    <button id="hapusbtn" type="submit">Hapus</button>
    <button id="backbutton" type="button" onclick="window.location.href='edituser.php'">Back</button>
    </div>
</form>
</body>
</html>