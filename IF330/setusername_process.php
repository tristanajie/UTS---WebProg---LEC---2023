<?php
require_once('db.php');

// Check if all required fields are filled
if (isset($_POST['usernameold'], $_POST['usernamenew'])) {
    $usernameold = $_POST['usernameold'];
    $usernamenew = $_POST['usernamenew'];

    // Check if any of the required fields are empty
    if (!empty($usernameold) && !empty($usernamenew)) {
        $sql = "UPDATE user
                SET username = ?
                WHERE username = ?";

        $result = $db->prepare($sql);
        $result->execute([$usernamenew, $usernameold]);

        header('location: setusername.php');
    }
}
