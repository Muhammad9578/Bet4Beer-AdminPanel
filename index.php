<?php 
session_start();

if (isset($_SESSION['username'])=="marwaha.nishtha20@gmail.com" && isset($_SESSION['password'])=="Nopasssword@20") {
    header("location:dashboard/index.php");
}


if (isset($_POST['abc'])) {
    
    extract($_POST);

    if ($_POST['username']=="marwaha.nishtha20@gmail.com" && $_POST['password']=="Nopasssword@20") {

        $_SESSION['username']=$username;
    $_SESSION['password']=$password;

        header("location:dashboard/index.php");
    }else{
        echo "<script>alert('Please Enter Correct Username | Email and Password ! ')</script>";
    }
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/img/logo.jpg">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dashboard/assets/css/style.css">
</head>

<body>
    <div class="main-wrapper" style="background-color: #fff;">
        <div class="account-page">
            <div class="container">
                <h2 align="center" style="font-family: cooper black;">Bets<span style="padding-left: 1px;padding-right: 1px;">4</span>Beers</h2>

                <h3 class="account-title" style="font-family: times new roman;">Login</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <img src="dashboard/assets/img/logo.jpg" width="85px" height="70px">
                        </div>
                        <form method="POST">
                            <div class="form-group form-focus">
                                <label class="focus-label">Username or Email</label>
                                <input class="form-control floating" name="username" type="text">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">Password</label>
                                <input class="form-control floating" name="password" type="password">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" style="background-color: #FEAC00;color:#030106;" class="btn btn-rounded btn-block" name="abc"  value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="dashboard/assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="dashboard/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="dashboard/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dashboard/assets/js/app.js"></script>
</body>
</html>