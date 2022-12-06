<?php
include"header.php"
?>
<div class="row p-5 mt-3" id="cent" >
<div class="col-md-12" id="mess">
<h2>Contact Us</h2>
<nav>
<div class="nav">
<a href="home.php" class="nav-link">Home</a><p style="padding:6px">Contact Us</p>
</div>
</nav>
</div>
</div>

<div class="row p-5 mt-3" id="none" >
<div class="col-md-12  text-center">
<p><b>NEED HELP?</b></p>
<h2>Get In Touch With us</h2>
<div class="row p-4">
<div class="col-md-6" id="carry">
<div class="row p-5 mt-5">
<div class="col-md-6">
<h4 style="padding-bottom:15px;padding-top=13px"><b><u>Our Website</u></b></h4>
<p style="padding-bottom:15px;padding-top=13px;color:blue"><b> www.example.com<br>www.theme.net</b></p></div>
<div class="col-md-6">
<h4 style="padding-bottom:15px;padding-top=50px"><b><u>Call Us On</u></b></h4>
<p style="padding-bottom:15px;padding-top=13px;color:blue"><b>&#43 2763(388)2930<br>&#43 4875(356)2568</b></p></div>
</div>
<div class="row">
<div class="col-md-6">
<h4 style="padding-bottom:15px;padding-top=13px"><b><u>Email us</u></b></h4>
<p style="padding-bottom:15px;padding-top=13px;color:blue"><b>edu@example.com<br>contact@edu.com</b></p></div>
<div class="col-md-6">
<h4 style="padding-bottom:15px;padding-top=50px"><b><u>Our Location</u></b></h4>
<p style="padding-bottom:15px;padding-top=13px;color:blue"><b>486 Normana Avenue<br>Morningtide 4223</b></p></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<form action="#" method="post"> 
<input type="text" name="name" placeholder="Name*" required class="form-control"><br>
<input type="text" name="email" placeholder="Email*" required class="form-control"><br>
<input type="tel" name="phone" placeholder="Phone" class="form-control"><br>
<input type="text" name="subject" placeholder="Subject" required class="form-control"><br>
<textarea type="Your Message"  name="message" rows="10" cols="88"></textarea><br>
<br><button class="btn btn-primary" name="btnsubmit">Submit</button>
</form>
<?php
if(isset($_POST['btnsubmit']))
{
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$subject=mysqli_real_escape_string($conn,$_POST['subject']);
$message=mysqli_real_escape_string($conn,$_POST['message']);

$query="insert into contact1(name,email,phone,subject,message)values
('$name','$email','$phone','$subject','$message')";

if(mysqli_query($conn,$query))
{
	echo"<script>alert('done')</script>";
}
else
{echo mysqli_error($conn);
}
}
?>
</div></div>
</div>
</div>
</div>
<div class="row p-5">
<div class="col-md-10 offset-1">
<div class="row">
<div class="col-md-12" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27646.436662370226!2d75.06479488571362!3d29.985045591835625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391129730d1747e1%3A0x9c2cd8812c25ea4!2sTalwandi%20Sabo%2C%20Punjab%20151302!5e0!3m2!1sen!2sin!4v1658476489770!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>
</div>


	
	
	
<?php

include"footer.php";
?>