<?php
require_once('db.php');

// Check if all required fields are filled
if (
    isset($_POST['produk'])
) {
    $produk = $_POST['produk'];

    // Check if any of the required fields are empty
    if (
        !empty($produk)
    ) {
        $sql = "DELETE FROM produk WHERE produk = ?;";

        $result = $db->prepare($sql);
        $result->execute([$produk]);

        header('location: hapusmenu.php');
    }
}
?>