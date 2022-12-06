<?php
include"header.php"
?>
<div class="row p-5 " id="mig" >
<div class="col-md-12">
<h2>Login& Register</h2>
<nav>
<div class="nav">
<a href="#" class="nav-link">Home</a><p style="padding:6px">Login& Register</p>
</div>
</nav>
</div>
</div>
<div class="row p-5 ">
<div class="col-md-10 offset-1">
<div class="row">
<div class="col-md-5 me-5">
<img src="image\img45.png" height="450px" width="100%">
</div>
<div class="col-md-5 mb-3 ms-5 border">
<h1 style="text-align:center"> Register</h1>
<div class="form-group">
<form action="#" method="post"> 
<input type="text"  name="name" placeholder="Fullname"  class="form-control"><br>
<input type="email" name="email"  placeholder="Email"  class="form-control"><br>
<input type="tel" name="phone"  placeholder="Phone no."  class="form-control"><br>
<select name="course">
<option>Selectcourse</option>
<option>Human resourses</option>
<option>Web development</option>
<option>Mathematical Physics</option>
<option>Number Theory</option>
<option>Data Science</option>
<option>Artificial Intelligence</option>
<option>Art& Design</option>
<option>Nuclear Power</option>
</select><br><br>
<button name="submmit" class="btn btn-dark">Register</button><br>
</form></div>
<?php
if(isset($_POST['submmit']))
{
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$course=mysqli_real_escape_string($conn,$_POST['course']);

$query="insert into register(name,email,phone,course)values('$name','$email','$phone','$course')";

if(mysqli_query($conn,$query))
{
	echo"<script>alert('finished')</script>";
}
else
{echo mysqli_error($conn);
}
}
?>
</div>
</div>
</div>
</div>
<?php
include"footer.php";
?>