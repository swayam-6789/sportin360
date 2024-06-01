<?session_destroy(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<div class="main-w3layouts wrapper">
		<h1>REGISTRATION FORM</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required="">
					<br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="login" value="Login">
				</form>
				<p>Don't have an Account? <a href="./signup.php"> Register Now!</a></p>
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
	</div><?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = 'SELECT * FROM Users WHERE username="'.$username.'";';
        $res = mysqli_query($connection,$sql);
        if (mysqli_num_rows($res) == 0) {
            echo '<p class="error">Username is not registered!</p>';
        } else {
            $row = mysqli_fetch_assoc($res);
            if ($password === $row['password']) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['fname'] = $row['fname'];
                echo '<p class="success">Congratulations, you are logged in!</p>
                <script>
                window.location.replace("./home.php");
				</script>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
        exit();
    }
?>