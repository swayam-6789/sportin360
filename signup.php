<!DOCTYPE html>
<html>

<head>
	<title>SignUp Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Custom Theme files -->
	<link href="./assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<!-- //web font -->
</head>

<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>REGISTRATION FORM</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<br>
						<input class="text" type="text" name="fname" placeholder="First Name" required="">
						<br>
						<input class="text" type="text" name="lname" placeholder="Last Name" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password"
						required="">
					<input class="text" type="text" name="location" placeholder="Location"
						required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="register" value="SIGNUP">
				</form>
				<p>Already have an Account. <a href="./login.php"> Login Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<?php
	session_start();
	include('config.php');
	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$location = $_POST['location'];
		$password = $_POST['password'];
		$password_hash = $password;
		$sql='select * from Users where username="'.$username.'";';
        $query=mysqli_query($connection,$sql);
		echo mysqli_num_rows($query);
		if (mysqli_num_rows($query) > 0) {
			echo '<p class="error">The username is already taken!</p>';
		}
		if (mysqli_num_rows($query) == 0) {
            
			$query = mysqli_query($connection,'INSERT INTO Users (username,password,email,fname,lname,location) VALUES ("'.$username.'","'.$password.'","'.$email.'","'.$fname.'","'.$lname.'","'.$location.'")');
				echo '<p class="success">Your registration was successful!</p>
                <script>
                    window.location.replace("./login.php");
                </script>';
			
		}
	}
	?>
</body>

</html>