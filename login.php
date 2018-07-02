<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

</head>
<body>
<!-- Navigation -->
<?php
	require('db.php');
	
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);

        if($rows == 1){

			$_SESSION['username'] = $username;

				header("Location: index.php");
            } else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			}
    } else{
?>
<div class="login-form">
		<form action="" method="post" name="login">
			<div class="img-wrapper">
				<img class="img-responsive" src="img/login-user.png" />
			</div>
		<div class="form-group">
		 <input class="form-control" type="text" name="username" placeholder="Username" required />
		</div>
		<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password" required />
		</div>
		<div class="btn-wrapper">
			<input class="btn btn-primary" name="submit" type="submit" value="Login" />
		</div>
		</form>
		<p class="regsiter-link">Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>

</body>
</html>
