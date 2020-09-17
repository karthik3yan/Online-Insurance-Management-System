<?php
	
	
 include ('dbconn.php');
	
	$id = $_GET['cid'];
	
	$result = mysqli_query($con, "SELECT * FROM `claim_req` WHERE `id` = '".$id."'");
	
	if (mysqli_num_rows($result) != 0) {
        
        	while ($row = mysqli_fetch_assoc($result)) {
                
                
                
                $pid = $row['policy_id'];
                $nature = $row['nature'];
                $date_detected = $row['date_detected'];
                $dr_name = $row['dr_name'];
                $dr_phone = $row['dr_phone'];
                $date_admitted = $row['date_admitted'];
                $date_discharged = $row['date_discharged'];
                $hospital = $row['hospital'];
                $amount = $row['amount'];
                $document = $row['document'];
                $sdate = date("Y-m-d");
                
                $result1 = mysqli_query($con, "SELECT * FROM `policies` WHERE `id` = '".$pid."'");
	
	if (mysqli_num_rows($result1) != 0) {
        
        	while ($row1 = mysqli_fetch_assoc($result1)) {
                
                $by = $row1['user_email'];
                
                
            }
    }
                
        
        $insert2 = mysqli_query($con, " INSERT INTO `claims` (`id`, `policy_id`, `nature`, `date_detected`, `dr_name`, `dr_phone`, `date_admitted`, `date_discharged`, `hospital`, `amount`, `document`, `claimed_on`, `claimed_by`) VALUES (NULL, '$pid', '$nature', '$date_detected', '$dr_name','$dr_phone', '$date_admitted', '$date_discharged', '$hospital', '$amount', '$document', '$sdate', '$by')");
        if ($insert2) {
            
            $result3 = mysqli_query($con, "DELETE FROM `claim_req` WHERE  `id` = '".$id."'");
             if ($result3) {
                 
                 $insert4 = mysqli_query($con, "INSERT INTO `notifications` (`notid`, `title`, `date`, `useremail`) VALUES (NULL, 'Your Claim for Policy ID : $pid Is Approved for Amount $amount ', '$sdate', '$by')");
                 if ($insert2) { 
                     
                     $result8 = mysqli_query($con, " UPDATE `policies` SET `num_claims`= `num_claims`+1 WHERE `id` = '".$pid."' ");
                    if ($result8) {
                        
                    }
                 
                 
                 }
                 
                 
                 header("Location: claimreq.php");
		
	}
	}
            }
    
	} 
else {
				echo"Error : ";
         echo"<a href='index.php'> Go back</a>";
	}
?>