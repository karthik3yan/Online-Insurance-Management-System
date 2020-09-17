
<?php 
 include ('dbconn.php');
 

                                          
$pid = $_GET["pid"];                                   
$nature = $_POST["nature"];                                   
$doi = $_POST["doi"];
$hospital = $_POST["hospital"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$doa = $_POST["doa"];
$dod = $_POST["dod"];
$amt = $_POST["amt"];


     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'file';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    #sql query to insert into database

	$insert = mysqli_query($con, "INSERT INTO `claim_req` ( `policy_id`,`nature`, `date_detected`, `dr_name`, `dr_phone`, `date_admitted`, `date_discharged`, `hospital`, `amount`, `document`) VALUES ( '$pid', '$nature', '$doi', '$name', '$phone', '$doa','$dod', '$hospital', '$amt', '$pname');");
        if ($insert) {

  echo "Request Has been Sent to Admin. We will verify all the documents submitted by you and the claim amount will be directly deposited in your bank account and You will be Notified." ;  
                              echo "<a href=\" /insurance/user/index.php\" class=\"btn btn-secondary btn-block btn-lg\">Go To Dashboard</a>"; 
    }
    else{
       echo "Error";
        echo "<a href=\" /insurance/user/index.php\" class=\"btn btn-secondary btn-block btn-lg\">Go To Dashboard</a>"; 
    }
?>