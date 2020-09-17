<?php
	
	
 include ('dbconn.php');
	
	$id = $_GET['pid'];
	
	$result = mysqli_query($con, "SELECT * FROM `policy_req` WHERE `id` = '".$id."'");
	
	if (mysqli_num_rows($result) != 0) {
        
        	while ($row = mysqli_fetch_assoc($result)) {
                
                $pid = $row['policy_id'];
                 $email = $row['user_email'];
                $sdate = date("Y-m-d");
                
              
            
            $result3 = mysqli_query($con, "DELETE FROM `policy_req` WHERE  `id` = '".$id."'");
             if ($result3) {
                 
                 $insert4 = mysqli_query($con, "INSERT INTO `notifications` (`notid`, `title`, `date`, `useremail`) VALUES (NULL, 'Your policy with Policy ID : $pid Is Rejected ', '$sdate', '$email')");
                 if ($insert2) { 
                 
                 
                 }
                 
                 
                 header("Location: index.php");
		
	}
	}
            }
    
	
else {
				echo"Error : ";
         echo"<a href='index.php'> Go back</a>";
	}
?>