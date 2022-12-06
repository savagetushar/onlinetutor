<?php
session_start();
include "../connection.php";
?>
<html>
 <head>
<link href="../bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../bootstrap/css/bootstrap-grid.min.css"type="text/css"rel="stylesheet"/>
<link href="stylesheet00.css" type="text/css" rel="stylesheet"/>
</head>
<body id="adminbody">
<div class="container-fluid">

<div class="col-md-12 ">
<h6 class="text-center heading display-5"> Login </h6>

<?php
if(isset($_POST['btnlogin']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from login
	where username='$username' and password='$password'";
	$r=mysqli_query($conn,$q);
	if(mysqli_num_rows($r)>0)
	{
		$row=mysqli_fetch_array($r);
		$_SESSION['adminid']=$row['id'];
		$_SESSION['adminuser']=$username;
		echo "<script>window.location.href='dashboard.php';</script>";
	}
	else
	{
		echo "<p>Invalid Username or Password</p>";
	}
}
?>
<form action="#" method="post" >
<div class="form" action="#" method="post">
<div class="form-group">
</div>
<div class="row">
<div class="col-md-8 border p-5 offset-2">
<label  for="name">User Name</label>
<input type="username" class="form-control" placeholder="*Enter User Name*" name="username" />
<label  for="password">Password</label>
<input type="password" class="form-control" placeholder="*Enter Password*" name="password"/>

<div class="row text-center">
<div class="col-md-12">
<button class="btn btn-success" type="submit" name="btnlogin" value="LogIn" id="space">Login
</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>

</body>
</html>
