<?php
    session_start();  
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
        $query = "INSERT into `login` (username, password, email, age, trn_date) VALUES ('$username', '".md5($password)."', '$email','$age', '$trn_date')";
        $result = mysqli_query($con,$query);

        if($result){
            echo "<div class='successful-reg'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>