<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require('db.php');
        //if from submitted, insert values into the database.

        if (isset($_REQUEST['email'])) {
            $username =  stripcslashes($_REQUEST['username']);
            //removes backslashes
             $username = mysqli_real_escape_string($con, $username);
            //escape special charecters in a string
            $email = stripcslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con, $email);
            $password =  stripcslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $trn_date = date("Y-m-d H:i:s");

            $query = "INSERT INTO users (username, password, email , trn_date)
                        VALUES ('$username', '".md5($password)."','$email', '$trn_date')";

            $result = mysqli_query($con, $query);
            
            if ($result) {
                echo "<div calss = 'form' align = 'center'>
                        <h3> You are registered successfully </h3>
                        <br> Click here to <a href='login.php'>Login</a>
                      </div>";
            }

        }else {

    ?>

    <div class="form">
        <h1>Registration</h1>
        <form name="registration" action="" method="post">
            <input type="text" name="username" placeholder="Username" require>
            <input type="email" name="email" placeholder="Email" require>
            <input type="password" name="password" placeholder="Password" require>
            <br><br>
            <button type="submit" class="btn btn-info " name="submit" value="Register">Register</button>
        </form>
        <br>
        <p> Click here to Login <a href="login.php">Login here </a></p>

    </div>
    <?php } ?>
</body>
</html>