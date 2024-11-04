<?php 
session_start();
if ($_SESSION['username']!="marwaha.nishtha20@gmail.com" && $_SESSION['password']!="Nopasssword@20") {
    header("location:../index.php");
}
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
    <title>Admin | Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/popup.css">
</head>

<body>
    <center>
<div class="row">
<div class="col-sm-5">
  <div id="blackOverlay" class="blackOverlay"></div>
        <div id="popup" style="margin-top: 20px;" class="popup">
                <div><center><img class="closePopup" width="40px" src="assets/img/close.png" onclick="closePopup()">
                    <img id="showImg" src="" alt="" /> </center>
                </div>
             </div>
        </div>
    </div>
</center>

    <div class="main-wrapper">
        <?php include("include/top_bar1.php") ?>
        <?php include("include/side_bar1.php") ?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                

                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-table">
                            <div class="card-header" style="border-top-right-radius:40px; background-color: #16206A; color:white;font-weight: bold;">
                                <h4 style="color:white;font-weight: bold;" class="card-title m-b-0">Screenshots List</h4>
                               
                            </div>
							<div class="table-responsive">
                                <table class="table table-striped custom-table m-b-0">
                                    <thead >
                                      <tr style="background-color: #06006A; color:white;font-weight: bold;font-family: sans-serif; font-size: 15px;text-align: center;">
                                        <th>User Name</th>
                                        <th>E-mail Adrdress</th>
                                        <th>Image</th>
                                        <th style="text-align: center;">ACTION</th>
                                      </tr>
                                    </thead>
                                    <tbody id="reviews">
                                        
                                    </tbody>
                                </table>
                            </div>  
                        </div>

                        <div class="card card-table">
                            <div class="card-header" style="border-top-right-radius:40px; background-color: #16206A; color:white;font-weight: bold;">
                                <h4 style="color:white;font-weight: bold;" class="card-title m-b-0">Existing Users</h4>
                               
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover custom-table m-b-0">
                                    <thead>
                                      <tr  style="background-color: #06006A; color:white;font-weight: bold;font-family: sans-serif; font-size: 15px;text-align: center;">
                                        <th>User Name</th>
                                        <th>E-mail Adrdress</th>
                                        <th>Image</th>
                                        <th style="text-align: center;">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody id="others">
                                    </tbody>
                                </table>
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript">
        function showPopup(abc) {
    document.getElementById('blackOverlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
    document.getElementById('showImg').src=abc.src;
    
}

function closePopup() {

    document.getElementById('blackOverlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
    
}
    </script>
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
      <script src="main.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/morris/morris.min.js"></script>
    <script type="text/javascript" src="assets/plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>
