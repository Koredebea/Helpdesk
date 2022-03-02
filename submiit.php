<?php
session_start();
if (!isset($_SESSION['User'])){
	$_SESSION['msg']='You must login first';
	header('location:nimasa.php');
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['User']);
header('location:nimasa.php');
}?>
<head>
<link rel="stylesheet"  href="stylesheet/style.css">
</head>
<body>
  <form>
<div class= "input-group">
<!-- logged in user information-->
<?php if(isset($_SESSION['User'])):?>
  <label for="">Name</label><input type="text" name="username" value="">
  <?php<?php if (isset($_['success'])):?>
  <div class="error success">
  <h3><?php echo$_SESSION['success'];
  unset($_SESSION['success']);?></h3></div>
  <?php endif ?>
  <!-- logged in user information-->
  <?php if(isset($_SESSION['User'][`username`]));?>

   </div><br><br>
<div class= "input-group">
  <label for="">Staff ID</label><input type="text" name="staffs" value=""></div><br><br>
<div class= "input-group">
  <label for="">Department</label><input type="text" name="dept" value=""></div><br><br>
  <input type="radio" name="option" value="Network issues"><label for="options">Network issues</label>
  <input type="radio" name="option" value="SAGE"><label for="options">SAGE</label>
  <input type="radio" name="option" value="Computer System"><label for="options">Computer System</label>
  <input type="radio" name="option" value="Others"><br><br><label for="options">Others</label>
<div class= "input-group">
<label for="">Explain issues</label><br>
  <textarea name="name" rows="8" cols="50"></textarea></div><br><br>
  <input type="submit" name="" value="Submit">

</form>
</body>
</html>
<?php endif ?>
