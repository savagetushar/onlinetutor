<html>
<head><title></title>
</head>
<body>
<div class="row">
<div class="col-md-12">
<H1>HIRE A TUTOR</H1>
</div>
</div>
<div class="row">
<div class="col-md-10 offset-1">
<div class="col-md-6">
<img src="" height="500px" width="100%">
</div>
<div class="col-md-6">
<img src="" height="500px" width="100%">
</div>
</div>
</div>
<div class="row">
<div class="col-md-10 offset-1">
<div class="col-md-6">
</div>
<div class="col-md-6">
<div class="form-group">
<label>
Are You a Parent or Student?<br><br>
<select name="identity">
<option>Parent</option>
<option>Student</option>
</select><br><br>
</label>
<input type="text" name="name" placeholder="Name" class="form-control"><br><br>
<label>
Your Contact Details:<br><br>
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
Preferred Contact Method:<br><br>
</label>
<input type="checkbox" name="emailid" >Email<br>
<input type="checkbox" name="phonecall" >Phone call<br>
<input type="checkbox" name="whatsapp" >Whatsapp<br><br>
<label>
Details of Tutoring Request:<br><br>
</label>
<textarea type="message" name="message" placeholder="Exams,Subjects,propective schools/universities etc.What would you like specific with help?rows="50" cols="30">
</textarea><br><br>

<label>
Frequency & Duration of Tuition:<br><br>
</label>
<input type="text" name="duration" placeholder="Eg. 2hours a week for 3 months class="form-control">
<buttton  class="btn btn-warning" name="submitt"> SUBMIT</BUTTON>

</form>
<?php
if(isset($_POST([;submitt']))
{
$identity=mysqli_real_escape_string($conec,$POST['identity']);
$email=mysqli_real_escape_string($conec,$POST['email']);
$phone=mysqli_real_escape_string($conec,$POST['phone']);
$country=mysqli_real_escape_string($conec,$POST['country']);
$emailid=mysqli_real_escape_string($conec,$POST['emailid']);
$phonecall=mysqli_real_escape_string($conec,$POST['phonecall']);
$whatsapp=mysqli_real_escape_string($conec,$POST['whatsapp']);
$message=mysqli_real_escape_string($conec,$POST['message']);
$duration=mysqli_real_escape_string($conec,$POST['duration']);

$query="insert into hiretutor(identity,email,phone,country,emailid,phonecall,whatsapp,message,duration)values
('$identity','$email','$phone','$country','$emailid','$phonecall','$whatsapp','$message','$duration')";

if(mysqli_query($conec,$query))
{
     echo"<script>alert('submitted')</script>";
}
else
{
   echo mysqli_error($conec);
}
}
?>
</div>
</div>
</body>
</html>