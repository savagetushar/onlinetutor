<html>
<head>
<title>admin</title>
<link href="style1.css" type="text/css" rel="stylesheet">
<link href="..\bootstrap\css\bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="..\bootstrap\css\bootstrap-grid.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include"../connection.php";
?>
<div class="container-fluid">
<div class="row bg-info p-3">
<div class="col-md-1 " >
<i style="font-size:70px;margin-left:60px" class="fa fa-lock"></i>
</div>
<div class="col-md-5 text-left" >
<h1 style="font-family:cooper;color:lavender;font-size:60px">Admin Panel</h1>
</div>
<div class="col-md-6 p-4" id="add">
<div class="nav">
<nav>
<a style="margin-left:600px;color:lavender" href="login.php" class="nav-link">Login</a>

</nav></div>
</div></div>
<div class="row" >
<div class="col-md-3 p-2 bg-info" >
<h4 style="margin-top:5px;margin-left:10px"><b>General</b></h4><hr>
<div class="nav">
<nav>
<div class="row">
<div class="col-md-4  mt-1 mb-4">
<i style="font-size:30px" class="fa fa-tachometer"></i>

</div>
<div class="col-md-8 " id="jean">

<a href="dashboard.php" class="nav-link"><b>Dashboard</b></a></div></div></nav></div>
<div class="row">
<div class="nav">
<nav>
<div class="row">
<div class="col-md-4 mt-1 mb-4">
<i style="font-size:30px" class="fa fa-comments"></i>
</div>
<div class="col-md-8" id="jeann">
<a href="feedback.php" class="nav-link"><b>Feedback</b></a></div></div></nav></div></div>
<div class="row">
<div class="nav">
<nav>
<div class="row">
<div class="col-md-4 mt-1 mb-4">
<i  style="font-size:30px" class="fa fa-registered"></i>
</div>
<div class="col-md-8 p-1" id="jeani">
<a href="registeration.php" class="nav-link"><b>Registeration</b></a></div></div></nav></div></div>
<div class="row">
<div class="nav">
<nav>
<div class="row">
<div class="col-md-4 mt-3 mb-4">
<i  style="font-size:30px" class="fa fa-address-book"></i>
</div>
<div class="col-md-8 pt-2" id="jeny">
<a href="hireatutor.php" class="nav-link"><b>HireTutor</b></a></div></div></nav></div></div>
<div class="row">
<div class="nav">
<nav>
<div class="row">
<div class="col-md-5 mt-1 mb-4">
<i  style="font-size:30px" class="fa fa-sign-out" ></i>
</div>
<div class="col-md-7 ps-2" id="jeany">
<a href="logout.php" class="nav-link"><b>Logout</b></a></div></div></nav></div></div></div>
<div class="col-md-9 p-5" id="seed">
<h1 style="margin-top:5px;margin-left:10px;text-align:center;font-family:cursive;font-family:60px"><b>Hi,welcome back!</b></h1>
<h5 style="margin-top:5px;margin-left:10px;text-align:center">Like what you see?Check out  for more.</h5>











