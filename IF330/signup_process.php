<?php
require_once('db.php');

// Check if all required fields are filled
if (
    isset($_POST['username'], $_POST['first_name'], $_POST['last_name'], $_POST['birth_date'],
    $_POST['jenis_kelamin'], $_POST['password'], $_POST['role'])
) {
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check if any of the required fields are empty
    if (
        !empty($username) && !empty($first_name) && !empty($last_name) && !empty($birth_date)
        && !empty($jenis_kelamin) && !empty($password) && !empty($role)
    ) {
        // Hash the password
        $en_pass = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (username, first_name, last_name, birth_date, jenis_kelamin, password, role)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $result = $db->prepare($sql);
        $result->execute([$username, $first_name, $last_name, $birth_date, $jenis_kelamin, $en_pass, $role]);

        header('location: login.php');
    } else {
        // Display a JavaScript alert with a message
        echo "<script>alert('Please fill in all required fields.'); window.location.href = 'signup.php';</script>";
    }
} else {
    // Redirect back to the signup page with an error message
    header('location: signup.php');
}
?>

