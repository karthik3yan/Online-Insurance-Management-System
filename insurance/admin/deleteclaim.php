<?php
	
	
 include ('dbconn.php');
	
	$id = $_GET['cid'];
	
$sdate = date("Y-m-d");


	$result = mysqli_query($con, "SELECT * FROM `claim_req` WHERE `id` = '".$id."'");
	
	if (mysqli_num_rows($result) != 0) {
        
        	while ($row = mysqli_fetch_assoc($result)) {
                
                
                
                $pid = $row['policy_id'];
                
            }}


            
            $result3 = mysqli_query($con, "DELETE FROM `claim_req` WHERE  `id` = '".$id."'");
             if ($result3) {
                 
                 
                           $result1 = mysqli_query($con, "SELECT * FROM `policies` WHERE `id` = '".$pid."'");
	
	if (mysqli_num_rows($result1) != 0) {
        
        	while ($row1 = mysqli_fetch_assoc($result1)) {
                
                $by = $row1['user_email'];
                
                
            }
    }
                 
                 
                 $insert4 = mysqli_query($con, "INSERT INTO `notifications` (`notid`, `title`, `date`, `useremail`) VALUES (NULL, 'Your claim for Policy ID : $pid Is Rejected ', '$sdate', '$by')");
                 if ($insert2) { 
                 
                 
                 }
                 
                 
                 header("Location: claimreq.php");
		
	}

	
else {
				echo"Error : ";
         echo"<a href='index.php'> Go back</a>";
	}
?>