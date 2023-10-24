<?php
session_start();
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pastikan pengguna sudah login sebelum menambahkan item ke keranjang
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
        // Dapatkan data yang dikirimkan dari form
        if (isset($_POST['selected_menu'])) {
            $selected_menu = $_POST['selected_menu'];
            
            // Pecah string produk dan harga
            list($produk, $harga) = explode(',', $selected_menu);

            // Selanjutnya, Anda bisa menyimpan data ini ke dalam tabel "cart" di database
            $sql = "INSERT INTO cart (produk, harga) VALUES (?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->execute([$produk, $harga]);

            // Item berhasil ditambahkan ke keranjang
            header("Location: minuman.php");
        }
    } else {
        // Jika pengguna belum login, arahkan ke halaman login.php
        header("Location: login.php");
    }
}
?>
