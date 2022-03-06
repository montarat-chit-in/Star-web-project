<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require('db.php');
        session_start();
        
        if (isset($_POST['email'])) {
            //removes backslashes
            $email = stripcslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $email);
           
            $password =  stripcslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password); 

            //Checking is usre existing in the database or not
            $query = "SELECT * FROM users WHERE email='$email' AND password='".md5($password)."'";

            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                $_SESSION['email'] = $email;
                //redirect user to index.php
                header("Location: index.php");
            }else {
                echo "<div class = 'form'>
                        <h3> Email/Password is incorrect. </h3>
                        <br> Click here to <a href='login.php'>Login</a>
                      </div>";
            }

        }else {
    
    ?>
        <div class="form">
            <h1>Login</h1>
            <form name="login" action="" method="post">
                <input type="email" name="email" placeholder="Email" require>
                <input type="password" name="password" placeholder="Password" require>
                <br><br>
                <button type="submit" class="btn btn-info " name="submit" value="Login">Login</button>
            </form>
            <br>
            <p> Not registered yet ? <a href="registeration.php">Register here</a></p>
        </div>

        <?php } ?>
</body>
</html>