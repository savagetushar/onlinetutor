<html>
<head>
<title>onlinetutor</title>
<link href="style1.css" type="text/css" rel="stylesheet">
<link href="bootstrap\css\bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="bootstrap\css\bootstrap-grid.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
include"connection.php";
?>
<div class="container-fluid">
<div class="row" id="bckimg" >
<div class="col-md-3 p-5 text-center" >
<img src="image\logo.png" height="80px" width="200px">
</div>
<div class="col-md-6 p-5">
<nav>
<div class="nav" id="poll" >
<a href="home.php" class="nav-link">Home</a>
<a href="about.php" class="nav-link">About</a>
<a href="hiretutor.php" class="nav-link">Hiretutor</a>
<a href="blog.php" class="nav-link">Blog</a>
<a href="contact.php" class="nav-link">Contact</a>

</nav>
</div>
<div class="col-md-3 p-5 text-center" id="log">
<a href="login&register.php"><button class="btn btn-primary">Login/Register</button></a>
</div>
</div>