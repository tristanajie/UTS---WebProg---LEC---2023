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
    <title>Edit User</title>
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
<div class="button">
    <button id="hapusbutton" onclick="window.location.href='hapususer.php'">Hapus User</button>
    <button id="updateusernamebutton" onclick="window.location.href='setusername.php'">Update Username</button>
    <button id="updatenamabutton" onclick="window.location.href='setnama.php'">Update Nama</button>
    <button id="updaterolebutton" onclick="window.location.href='setrole.php'">Update Role</button>
    <button id="backbutton" onclick="window.location.href='admin.php'">Back</button>
</div>
</body>
</html>