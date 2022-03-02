<?php include 'registed.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>

	<link rel="stylesheet"  href="stylesheet/style.css">
</head>
<body>
<br><div class='header'><h2>Register</h2></div>
<br>
<form action="reg_nimasa.php" method="POST">
<?php include 'errors.php';?>

<div class= "input-group">
<label><b>Staff id</b></label ><br>
<input type="number" min="500" name="id" id="id" ></div><br><br>
<div class= "input-group">
<label><b>Staff name</b></label ><br>
<input type="text" placeholder="firstname.lastname" name="username" id="first" ></div><br><br>
<div class= "input-group">
<label><b>Department</b></label ><br>
<input name="depart" type="text" id="email"  ></div><br><br>
<div class="input-group">
<label ><b> Password</b></label ><br>
<input type="password" id="pass" name = "password"   ></div><br><br>
<div class="input-group">
<label><b>Confirm password</b></label><br>
<input type="password" id="word" name="pasword"  ></div><br><br>

<button type="Submit" class="btn" name="reg_user" >Register</button><br><br>
</form>
<br><br>



</body>

<?php  endif   ?>
