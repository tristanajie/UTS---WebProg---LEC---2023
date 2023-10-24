<?php
require_once('db.php');

// Check if all required fields are filled
if (
    isset($_POST['username'])
) {
    $username = $_POST['username'];

    // Check if any of the required fields are empty
    if (
        !empty($username)
    ) {
        $sql = "DELETE FROM user WHERE username = ?;";

        $result = $db->prepare($sql);
        $result->execute([$username]);

        header('location: hapususer.php');
    }
}
?>