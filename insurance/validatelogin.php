<?php
	session_start();
	
	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'insurance';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
	$id = $_POST['email'];
	$password = $_POST['password'];
	echo $id;
echo $password;
	$result = mysqli_query($con, "SELECT `name`,`email`, `password` FROM `user` WHERE `email` = '".$id."' AND `password` = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {

        $_SESSION['username'] = $id;
		header("Location: user/");
    
	} 
else {
				echo"invalid username or password";
         echo"<a href='login.html'> Try again</a>";
	}
?>