<?php
session_start();
include "library/config.php";

?>
<!-- <h1>APPASI</h1>
<h2>Sign-In</h2>

<form action="cek-login.php" method="post">
    <input type="text" name="usernmae" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Sign In">
</form>

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login | APPASI</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="ceklogin.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="code" name="password" placeholder="Password" required>
                
                <button class="login" type="submit">Login</button>
            </form>
        </div>
        <div class="character">
           
        </div>
        
    </div>
</body>
</html>