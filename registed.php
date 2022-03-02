<?php

	session_start();
	//initialising variable from form
	$username="";
	$user="";
	$department="";
	$staffId="";
	$passworded="";
	$errors = array();
	//Connecting to database
	$db =mysqli_connect('localhost','root','','registration');
	//Register the user_error
	if(isset($_POST['reg_user'])){
		//RECIEVE ALL INPUT FROM THE FORM
		$staffId = mysqli_real_escape_string($db, $_POST['id']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$department = mysqli_real_escape_string($db, $_POST['depart']);
		$passworded = mysqli_real_escape_string($db, $_POST['password']);
		$password_1= mysqli_real_escape_string($db, $_POST['pasword']);
		//validate form input
		/*form validation ensures the form is filled correctly and display the corresponding errors
		*/
		if(empty($staffId)){
			array_push($errors,"ID is required");
		}
		if(empty($username)){
			array_push($errors,"username is required");
		}
		if(empty($department)){
			array_push($errors,"Your department is required");
		}
		if(empty($passworded)){
			array_push($errors,"Password is required");
		}
		//Checking for password match
		if ($passworded != $password_1)
		echo"Password don't match";
		}
		//Check the database to see if the user does not exist
		$user_check_query= "SELECT * FROM staff WHERE User='$username' AND ID ='$staffId' LIMIT 1";
		$result= mysqli_query($db, $user_check_query);
		$user= mysqli_fetch_assoc($result);



		// if user exists

		if($user){
			if(($user['User'])=== $username){
				array_push($errors, "username aready exists");
			}
			if(($user['ID'])=== $staffId){
				array_push($errors, "ID aready exists");
			}
		}



		//Finally Register new user
		if(count($errors)==0){
			//encrypt your password before sending to the database
			$password = md5($passworded);

		$query= "INSERT INTO staff(ID,User, Department, password) VALUES ('$staffId', '$username', '$department', '$password')";
		mysqli_query($db,$query);
		$_SESSION['User']=$username;
		$_SESSION['success']= 'You are now logged in';
		header('location:nimasa.php');
	}

	//Login user
	if(isset($_POST['login_user'])){
		//RECIEVE ALL INPUT FROM THE FORM
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password= mysqli_real_escape_string($db, $_POST['password']);
		//validate form input
		/*form validation ensures the form is filled correctly and display the corresponding errors
		*/
		if(empty($username)){
			array_push($errors,"username is required");
		}
		if(empty($password)){
			array_push($errors,"Password is required");
		}
		if(count($errors)==0){
			//check password hash
			$password = md5($password);
	    $query= "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$results= mysqli_query($db, $query);
		if(mysqli_num_rows($results) == 1){
			$_SESSION['username']=$username;
		$_SESSION['success']= 'You are now logged in';
		header('location:dashboards.php');
		}
		else{
			array_push($errors,"Wrong username or password");
	}}}
	?>
