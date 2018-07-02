<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>

<link rel="stylesheet" href="CareRott_files/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/register.css" />
</head>
<body>

<?php include 'nav.php' ?>

<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $age = $_REQUEST['age'];
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, age, trn_date) VALUES ('$username', '".md5($password)."', '$email','$age', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='successful-reg'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="reg-form">
    <h1>Registration</h1>
    <form name="registration" action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="username" placeholder="Username" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="age" placeholder="Enter Age" required />
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Password" required />
    </div>
        <div class="btn-wrapper"><input class="btn btn-primary" type="submit" name="submit" value="Register" /></div>
    </form>
</div>
<?php } ?>
</body>
</html>
