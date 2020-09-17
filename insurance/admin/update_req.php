<?php

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'insurance';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
   

                                      
	session_start();
                                            
                                            
                if (isset($_SESSION['admin'])) {
                                                          $email=$_SESSION['admin'];

      

   }
      
                                      




                                
                if (isset($_POST['password'])) {
                    
                    $pswrd=$_POST['password'];
             $insert = mysqli_query($con, "UPDATE `admin` set `password`= $pswrd WHERE `username` = '".$email."'");
	
	 if ($insert) {
		header("Location: /insurance/admin/account.php?status=updated");
	}
	

                }








?>