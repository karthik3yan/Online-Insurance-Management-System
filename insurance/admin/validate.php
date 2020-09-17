<?php
	session_start();
	
	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'insurance';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
	$id = $_POST['adminname'];
	$password = $_POST['password'];
	
	$result = mysqli_query($con, "SELECT * FROM `admin` WHERE `username` = '".$id."' AND `password` = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {

        $_SESSION['admin'] = $id;
		header("Location: index.php");
    
	} 
else {
				echo"invalid username or password";
         echo"<a href='login.php'> Try again</a>";
	}
?>