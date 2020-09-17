<?php
	
	
 include ('dbconn.php');
	
	$id = $_GET['pid'];
	
	$result = mysqli_query($con, "SELECT * FROM `policy_req` WHERE `id` = '".$id."'");
	
	if (mysqli_num_rows($result) != 0) {
        
        	while ($row = mysqli_fetch_assoc($result)) {
                $i = 1;
                $tr = $row['term_range'];
                $id = $row['id'];
                $pid = $row['policy_id'];
                $name = $row['holder_name'];
                $g = $row['holder_gender'];
                $dob = $row['holder_dob'];
                $term = $row['term_range'];
                $f = $row['holder_files'];
                $email = $row['user_email'];
                $sdate = date("Y-m-d");
                $eyear = date("Y");
                while ($i <= $tr)
                {
                    
                    $due_date=  $eyear."-".date("m-d");
                    
                     
        $insert1 = mysqli_query($con, "INSERT INTO `premium` (`premium_id`, `policy_id`, `due_year`, `status`, `due_date`) VALUES (NULL, '$id', '$eyear', 'Unpaid', '$due_date');");
                    
       
        if ($insert1) {
		
	}
                    
                    $eyear = $eyear + 1;
                    $i =$i+1;
                    
                    
                }
                $edate = $eyear."-".date("m-d");
             
                

        
        $insert2 = mysqli_query($con, "INSERT INTO `policies` (`id`,`policy_id`, `holder_name`, `holder_gender`, `holder_dob`, `term_range`, `holder_files`, `user_email`, `start_date`, `status`, `end_date`, `num_claims`) VALUES ('$id','$pid', '$name', '$g', '$dob', '$term', '$f', '$email', '$sdate', 'Active', '$edate', '0');
        ");
        if ($insert2) {
            
            $result3 = mysqli_query($con, "DELETE FROM `policy_req` WHERE  `id` = '".$id."'");
             if ($result3) {
                 
                 $insert4 = mysqli_query($con, "INSERT INTO `notifications` (`notid`, `title`, `date`, `useremail`) VALUES (NULL, 'Your policy with Policy ID : $pid Is Approved ', '$sdate', '$email')");
                 if ($insert2) { 
                 
                 
                 }
                 
                 
                 header("Location: index.php");
		
	}
	}
            }
    
	} 
else {
				echo"Error : ";
         echo"<a href='index.php'> Go back</a>";
	}
?>