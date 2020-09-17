<?php

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'insurance';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
    $newuser = $_POST['name'];
	$newpwd = $_POST['password'];
    $newdob=$_POST['date'];
    $newphone=$_POST['phone'];
    $email= $_POST['email'];
    $address=$_POST['address'];



$result = mysqli_query($con, "SELECT `email` FROM `user` WHERE `email` = '".$email."'");
	
	if (mysqli_num_rows($result) != 0) {
		  echo "Email already used ";
        echo"<a href='index.html'> Try again</a>";
	}
    else {
	$insert = mysqli_query($con, "INSERT INTO `user` (`user_id`, `name`, `password`, `dob`, `phone`,`email`,`address`) VALUES (NULL, '$newuser', '$newpwd', '$newdob', '$newphone','$email','$address');");
        if ($insert) {
		header("Location: login.html");
	}
     else {
         echo"Error : <a href='index.html'> Try again</a>";
     }
    }
	






?>