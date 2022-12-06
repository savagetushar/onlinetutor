<?php
 require"adminheader.php";
?><hr>
<div class="row bg-light">
<div class="row p-5">
<div class="col-md-12 text-center">
<h1 style="font-family:Elephant;font-size:50px"><b><u>Feedback</u></b></h1>
</div>
</div>
<div class="row">
<div class="col-md-8 offset-2">
<div class="table">
<?php
$query="select * from contact1";
$result=mysqli_query($conn,$query);
 
 echo"<table class='table text-center table-bordered table-striped ms-5'>";
 echo"<th>"."ID"."</th>";
 echo"<th>"."NAME"."</th>";
 echo"<th>"."EMAIL"."</th>";
 echo"<th>"."PHONE"."</th>";
 echo"<th>"."SUBJECT"."</th>";
 echo"<th>"."MESSAGE"."</th>";
 while($row=mysqli_fetch_array($result))
 {
 echo"<tr>";
	 echo"<td>".$row['id']."</td>";
	 echo"<td>".$row['name']."</td>";
	 echo"<td>".$row['email']."</td>";
	 echo"<td>".$row['phone']."</td>";
     echo"<td>".$row['subject']."</td>";
     echo"<td>".$row['message']."</td>";
 echo"</tr>";
 }
 echo"</table>";
 ?>
	</div>
</div>
</div></div>
<?php
include"adminfooter.php";
?>
	 
	 
	 
	 
	 
 