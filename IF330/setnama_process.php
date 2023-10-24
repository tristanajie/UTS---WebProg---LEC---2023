<?php
require_once('db.php');

// Check if all required fields are filled
if (isset($_POST['username'], $_POST['first_name'], $_POST['last_name'])) {
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Check if any of the required fields are empty
    if (!empty($username) && !empty($first_name)) {
        $sql = "UPDATE user
                SET first_name = ?,
                last_name = ?
                WHERE username = ?";

        $result = $db->prepare($sql);
        $result->execute([$first_name, $last_name, $username]);

        header('location: setnama.php');
    }
}
?>
