<?php
require_once('db.php');

// Check if all required fields are filled
if (isset($_POST['username'], $_POST['role'])) {
    $username = $_POST['username'];
    $role = $_POST['role'];

    // Check if any of the required fields are empty
    if (!empty($username) && !empty($role)) {
        $sql = "UPDATE user
                SET role = ?
                WHERE username = ?";

        $result = $db->prepare($sql);
        $result->execute([$role, $username]);

        header('location: setrole.php');
    }
}
?>