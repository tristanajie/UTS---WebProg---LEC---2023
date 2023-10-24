<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="topnav">
    <a href="home.php">Home</a>
</div>
<div class="container">
<form action="signup_process.php" method="post">
<h1>Sign Up</h1>
    <div>
    <input type="text" name="username" placeholder="Username" /><br />
    <input type="text" name="first_name" placeholder="First Name" /><br />
    <input type="text" name="last_name" placeholder="Last Name" /><br />
    <input type="date" name="birth_date" /><br />
    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" /><br />
    <input type="password" name="password" placeholder="Password" /><br />
    <select name="role" required>
        <option value="User">User</option>
        <option value="Admin">Admin</option>
    </select>
    <br />
    <button type="submit">Register</button>
    <button id="loginbutton" type="button" onclick="window.location.href='login.php'">Login</button>
    <button id="cancelbutton" type="button" onclick="window.location.href='home.php'">Cancel</button>
    </div>
</form>
</div>
</body>
</html>