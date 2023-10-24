<?php
session_start();
require_once('db.php');

// Hapus semua data dari tabel cart
$sqlCart = "TRUNCATE TABLE cart;";
$stmtCart = $db->prepare($sqlCart);
$stmtCart->execute();

header("Location: thankyou.php");
exit();
?>