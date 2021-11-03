<?php
include 'config.php';

if (isset($_POST['button'])) {
    $userText = $_POST['usernameText'];
    $eText = $_POST['emailText'];
    $pwText = md5($_POST['passwordText']);
    $cpwText = md5($_POST['confirmPasswordText']);   
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container">      
        <form action="" method = "POST" class="login-email">
            <p class="login-text">
                Sign Up
            </p>
            <div class="input-group">
                <input type="text", placeholder="Username" name = "usernameText" required>
            </div>
            <div class="input-group">
                <input type="email", placeholder="Email" name= "emailText" required>
            </div>
            <div class="input-group">
                <input type="password", placeholder="Password" name = "passwordText" required>
            </div>
            <div class="input-group">
                <input type="password", placeholder="Confirm Password" name = "confirmPasswordText" required>
            </div>
            <div class="input-group">
                <button class="btn" name = "button">
                    Register
                </button>
            </div>
        </form>
        <div class="new">
            <p>Already have an account? <a href="index.php">Login</a></p>
            
        </div>
    </div>
</body>
</html>