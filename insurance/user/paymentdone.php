<?php
	
	
 include ('dbconn.php');


$policyid= $_GET['policyid'];
	$planid = $_GET['planid'];
	$id = $_GET['pid'];
$status= "Paid On: ".date("Y-m-d");
echo $status;
	
	$result = mysqli_query($con, "UPDATE `premium` SET `status`= '".$status."' WHERE `premium_id` = '".$id."'");
	
	if ($result) {
    
    header("Location: viewmypolicy.php?pid=$policyid&planid=$planid");
    }

        
        ?>