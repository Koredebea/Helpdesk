<?php include 'registed.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
   
	<link rel="stylesheet"  href="stylesheet/style.css">
</head>
<body>
<br><div class='header'><h2>Register your Information</h2></div>
<br>
<form action="register.php" method="POST">

<div class= "input-group">
<label ><b>Staff Id</b></label><br>
<input type="text" name="id" id="first" ></div><br><br>
<div class="input-group">
<input name="first" placeholder="firstname.lastname" type="text" id="email"  ></div><br><br>
<label><b>Department</b></label><br>
<input type="text" id="word" name="department"  ></div><br><br>


<button type="Submit" class="btn" name="reg_user" >Update</button><br><br> 

</form>
<br><br>
  


</body>

?>