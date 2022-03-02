<?php include 'registed.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>

	<link rel="stylesheet"  href="stylesheet/style.css">
</head>
<body>
<br><div class='header'><h2>Login</h2></div>
<br>
<form action="nimasa.php" method="POST">
<?php include 'errors.php';?>
<div class= "input-group">
<label ><b></b></label><br>
<input type="text" placeholder="firstname.lastname" name="username" id="first" ></div><br><br>
<div class="input-group">
<label><b>Password</b></label><br>
<input type="password" id="word" name="password"  ></div><br><br>

<button type="Submit" class="btn" name="login_user" >Login</button><br><br>

</form>
<br><br>



</body>

?>
