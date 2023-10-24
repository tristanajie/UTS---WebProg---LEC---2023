<?php
session_start();
require_once('db.php');

// Hapus semua data dari tabel cart
$sqlCart = "TRUNCATE TABLE cart;";
$stmtCart = $db->prepare($sqlCart);
$stmtCart->execute();

// Hapus semua data dari tabel loggedinuser
$sqlUser = "TRUNCATE TABLE loggedinuser;";
$stmtUser = $db->prepare($sqlUser);
$stmtUser->execute();

// Redirect ke halaman home.php setelah logout
header("Location: home.php");
exit();
?>
