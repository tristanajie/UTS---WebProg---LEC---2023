<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="topnav">
    <a href="home.php">Home</a>
    </div>
    <div class="container">
    <h1>Login</h1>
    <div class="login-form">
    <form action="login_process.php" method="post">
        <input type="text" name="username" placeholder="Username" /><br />
        <input type="password" name="password" placeholder="Password" /><br />
        <input type="text" class="captcha" name="captcha" value="<?php echo substr(uniqid(), 5) ?>" readonly>
        <input type="text" name="confirmcaptcha" placeholder="Enter Captcha" value=""><br />
        <button type="submit">Login</button>
        <button id="signupbutton" type="button" onclick="window.location.href='signup.php'">Sign Up</button>
        <button type="button" onclick="window.location.href='home.php'">Cancel</button>
    </form>
    </div>
    </div>
</body>
</html>