<?php
include"header.php"
?>
<div class="row p-3">
<div class="col-md-12 text-center">
<h1 style="font-family:jokerman"><b>HIRE A TUTOR</b></h1>
</div>
</div><b style="color:red"></b>
<div class="row" id="kiran">
<div class="row">
<div class="col-md-12 p-5 ">
<img src="image/ht2.jpg" height="500px" width="100%">
</div>
</div>
</div>
<div class="row p-5">
<div class="col-md-10 offset-1">
<div class="row">
<div class="col-md-6  p-5">
<div class="row  text-center ">
<div class="col-md-5 me-5 mb-5 border pt-5 killed">
<i style="font-size:50px;margin-left:8px;" class="fa fa-laptop" aria-hidden="true"></i>
<h4>The Best Online Software</h4>
<p>Using Lessonspace,
our lessons are even more effective than in-person tution.</p>
</div>
<div class="col-md-5 me-4  mb-5  border pt-5 killed">
<i style="font-size:50px;margin-left:8px" class="fa fa-money" aria-hidden="true"></i>
<h4>Pay-As-You-Go</h4>
<p>Only pay after lessons have taken place,
with no signup fees and no commitment required.</p>
</div>
</div>
<div class="row text-center">
<div class="col-md-5 me-5 mb-5 border pt-5 killed">
<i style="font-size:50px;margin-left:8px" class="fa fa-certificate" aria-hidden="true"></i>
<h4>Expert Tutors</h4>
<p>We only hire the best tutors who are experts in their chosen subjects
and have attended top universities.</p>
</div>
<div class="col-md-5 me-4 mb-5 border pt-5 killed">
<i style="font-size:50px;margin-left:8px"class="fa fa-star" aria-hidden="true"></i>
<h4>Experience</h4>
<p>As well as having proven themselves academically,
 our tutors have extensive teaching experience</p>
</div>
</div>
<div class="row text-center">
<div class="col-md-5  border me-5 pt-5 killed">
<i style="font-size:50px;margin-left:8px" class="fa fa-first-order" aria-hidden="true"></i>
<h4>Track record of success</h4>
<p>Our tutors have helped students achieve top grades and gain entry 
into their first choice.</p>
</div>
<div class="col-md-5 border pt-5 killed">
<i style="font-size:50px;margin-left:8px" class="fa fa-smile-o" aria-hidden="true"></i>
<h4>Customer satisfaction</h4>
<p>We focus on narrowing gap between expectation and perceived experience.</p>
</div>
</div>
</div>
<div class="col-md-5 pt-5 mt-5 ms-5 keep" id="sun">
<H3 style="padding:30px;color:white"><b>HIRE A TUTOR!<b></H3>
<div class="form-group">
<form action="#" method="post">
<label>
<b>Are You a Parent or Student?</b><br><br>
<select name="identity">
<option>Parent</option>
<option>Student</option>
</select><br><br>
</label>
<input type="text" name="name" placeholder="Name" class="form-control"><br><br>
<label>
<b>Your Contact Details:</b><br><br>
</label>
<input type="text" name="email" placeholder="Email" class="form-control"><br><br>
<input type="tel" name="phone" placeholder="Phone" class="form-control"><br><br>
<select name="country">
<option>India</option>
<option>China</option>
<option>Japan</option>
<option>Pakistan</option>
<option>Italy</option>
<option>Australia</option>
<option>Canada</option>
<option>Russia</option>
<option>Other</option>
</select><br><br>
<label>
<b>Preferred Contact Method:</b>&nbsp&nbsp&nbsp
<br></label><br><br>
<select name="contact">
<option>select</option>
<option>emailid</option>
<option>phonecall</option>
<option>whatsapp</option>
</select><br><br>
<label>
<b>Frequency & Duration of Tuition:</b><br><Br>
</label>
<input type="text" name="duration" placeholder="Eg. 2hours a week for 3 months" class="form-control"><br><br>
<button class="btn btn-warning" name="submitt"> SUBMIT</BUTTON>

</form>
<?php
if(isset($_POST['submitt']))
{
$identity=mysqli_real_escape_string($conn,$_POST['identity']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$duration=mysqli_real_escape_string($conn,$_POST['duration']);

$query="insert into hiretutor(identity,name,email,phone,country,contact,duration)values
('$identity','$name','$email','$phone','$country','$contact','$duration')";

if(mysqli_query($conn,$query))
{
     echo"<script>alert('submitted')</script>";
}
else
{
   echo mysqli_error($conn);
}
}
?>
</div>
</div>
</div>
</div>
</div>
<?php
include"footer.php";
?>