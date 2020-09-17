<?php

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'insurance';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
   

                                      
	session_start();
                                            
                                            
                if (isset($_SESSION['username'])) {
                                                          $email=$_SESSION['username'];

      

   }
      
                                      




                                
                if (isset($_POST['password'])) {
                    
                    $pswrd=$_POST['password'];
             $insert = mysqli_query($con, "UPDATE `user` set `password`= $pswrd WHERE `email` = '".$email."'");
	
	 if ($insert) {
		header("Location: /insurance/user/account.php?status=updated");
	}
	

                }


  if (isset($_POST['phone'])) {
        $phone=$_POST['phone'];
      
             $insert = mysqli_query($con, "UPDATE `user` set `phone`= $phone WHERE `email` = '".$email."'");
	
	 if ($insert) {
		header("Location: /insurance/user/account.php?status=updated");
	}
	

                }






?>