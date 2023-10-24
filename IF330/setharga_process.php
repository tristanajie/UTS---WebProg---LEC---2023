<?php
require_once('db.php');

if (isset($_POST['produk'], $_POST['harga'])) {
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];

    if (!empty($produk) && is_numeric($harga)) {
        $harga = (int)$harga;

        try {
            // Insert into the database
            $sql = "UPDATE produk SET harga = ? WHERE produk = ?";
            $result = $db->prepare($sql);
            $result->execute([$harga, $produk]);

            header('location: setharga.php');
        } catch (PDOException $e) {
            // Handle any database errors
            echo "Error: " . $e->getMessage();
        }
    }
}
?>