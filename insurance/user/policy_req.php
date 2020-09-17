
<?php 
 include ('dbconn.php');
 
	session_start();
                                            
                                            
                if (isset($_SESSION['username'])) {
              
     $email=$_SESSION['username'];
   }
      
                                            else{
	header("Location: /insurance/login.html");                }
                                          

                                          
$id = $_GET["pid"];

$name = $_POST["name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$range = $_POST["range"];



     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'file';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);


    #sql query to insert into database

	$insert = mysqli_query($con, "INSERT INTO `policy_req` (`id`, `policy_id`, `user_email`, `holder_name`, `holder_gender`, `holder_dob`, `term_range`, `holder_files`) VALUES (NULL, '$id','$email', '$name', '$gender', '$dob', '$range', '$pname');");
        if ($insert) {

 
    echo "Request Has been Sent to Admin. You will be notified once the Policy is Approved ." ;  
                              echo "<a href=\" /insurance/user/index.php\" class=\"btn btn-secondary btn-block btn-lg\">Go To Dashboard</a>"; 
    }
    else{
        echo "Error";
        echo "<a href=\" /insurance/user/index.php\" class=\"btn btn-secondary btn-block btn-lg\">Go To Dashboard</a>"; 
    }
?>




