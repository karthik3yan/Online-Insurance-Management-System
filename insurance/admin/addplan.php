 <?php
	
	
 include ('dbconn.php');


    $name = $_POST['name'];
	$insurer = $_POST['insurer'];
    $premium=$_POST['premium'];
    $term=$_POST['term'];
    $age= $_POST['age'];
    $details=$_POST['details'];
    $amt=$_POST['amt'];



	$insert = mysqli_query($con, "INSERT INTO `plans` (`plan_id`, `name`, `sum_amt`, `premium_amt_annual`, `term_range`, `details`, `insurer`, `age_range`) VALUES (NULL, '$name', '$amt', '$premium', '$term', '$details', '$insurer', '$age')");
        if ($insert) {
		header("Location: newplan.php?status=success");
	}
    
    
	






?>