
<?php
    // include auth.php file on all secure pages
    include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Astronomy Web Learning</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link  rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" >
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="jumbotron">
          <div class="outer">
            <div class="logo">
            <img src="img/logo1.png" width="110px" height="140px">
            </div>
            <div class="title">
             <h1>Astronomy Web Learning</h1>
             </div>
          </div>            
        <nav>
            <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#section2">Learning</a></li>
            <li><a href="#section3">Contract</a></li>
            <li><a href="login.php">Logout</a></li>
            </ul>
         </nav>
    </div>
    <div class="Container1">
        <div id = "section2">
            <nav>
                    <ul>
                    <li><a href="solarsystem.php">Solar system</a></li>
                    <li><a href="sun.php">The Sun</a></li>
                    <li><a href="mercury.php">Mecury</a></li>
                    <li><a href="earth.php">Earth</a></li>
                    <li><a href="Mar.php">Venus</a></li>
        
                    </ul>
            </nav>
          </div>
    </div>
    
    <br><br>
<div class="footer"><br>
  <div id = "section3">
    <h3>CREATE BY</h3>
    <p>Mr.Soontorn Sakdaphisut 60122201046 &nbsp; <a class="b" href="https://web.facebook.com/profile.php?id=100009714672812"><i class="fab fa-facebook"></i></a></p>
    <p>Mr.Waranan Thongkan 60122201049  &nbsp; <a class="b" href="https://web.facebook.com/soontorn.f.sakdaphisut"><i class="fab fa-facebook"></i></a></p>
    <p>Mr.Montarat Chit-in 60122201062  &nbsp;  <a class="b" href="https://web.facebook.com/yung.ying.9484"><i class="fab fa-facebook"></i></a></p>
</div>
</div>

    <a class="gotopbtn" href="#"><i class="fas fa-angle-double-up"></i></a>




</body>
</html>
