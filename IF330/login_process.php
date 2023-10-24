<?php
session_start();
require_once('db.php');

$sql = "TRUNCATE TABLE loggedinuser;";
$stmt = $db->prepare($sql);
$stmt->execute();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userCaptcha = $_POST['confirmcaptcha'];
    $captcha = $_POST['captcha'];

    // Check if the captcha matches
    if ($userCaptcha !== $captcha) {
        // Display an alert message and redirect to login.php
        echo "<script>alert('Wrong captcha.'); window.location.href = 'login.php';</script>";
        exit();
    }

    // Check if the username is already in the "loggedinuser" table
    $checkSql = "SELECT * FROM loggedinuser WHERE username = ?";
    $checkStmt = $db->prepare($checkSql);
    $checkStmt->execute([$username]);
    $existingUser = $checkStmt->fetch(PDO::FETCH_ASSOC);

    // Check if the username and password match the records in the "user" table
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        // Display an alert message and redirect to login.php
        echo "<script>alert('User not found.'); window.location.href = 'login.php';</script>";
        exit();
    } else {
        if (password_verify($password, $row['password'])) {
            // Login successful, store user information in session
            $_SESSION['username'] = $username;

            // Insert username into "loggedinuser" table
            $insertSql = "INSERT INTO loggedinuser (username) VALUES (?)";
            $insertStmt = $db->prepare($insertSql);
            $insertStmt->execute([$username]);

            // Redirect to home.php
            header("Location: home.php");
            exit();
        } else {
            // Display an alert message and redirect to login.php
            echo "<script>alert('Wrong Password.'); window.location.href = 'login.php';</script>";
            exit();
        }
    }
}
?>

