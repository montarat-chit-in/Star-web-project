<?php
    // include auth.php file on all secure pages
    // session_start();
    include("auth.php");
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['email']; ?>!</p>
        <p>This is homepage and secure area.</p>
        <p><a href="main.php">MainPage</a></p>
        <a href="login.php">Logout</a>    
    </div>
</body>
</html>

