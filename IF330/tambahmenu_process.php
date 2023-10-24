<?php
require_once('db.php');

if (isset($_POST['produk'], $_POST['harga'])) {
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];

    if (!empty($produk) && is_numeric($harga)) {
        $harga = (int)$harga;

        try {
            // Insert into the database
            $sql = "INSERT INTO produk (produk, harga) VALUES (?, ?)";
            $result = $db->prepare($sql);
            $result->execute([$produk, $harga]);

            header('location: tambahmenu.php');
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

