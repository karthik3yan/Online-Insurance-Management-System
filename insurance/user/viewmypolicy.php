<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>INSURANCE - USER PANEL</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">InsurancePress - User Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            
                                            <?php
	session_start();
                                            
                                            
                if (isset($_SESSION['username'])) {
              
   
   }
      
                                            else{
	header("Location: /insurance/login.html");                }
                                             include ('dbconn.php');
$pid = $_GET['pid'];
                                            $email=$_SESSION['username'];
	
		$select = mysqli_query($con, "SELECT * from notifications where useremail = '".$email."'  ORDER BY notid DESC");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                                            
                                           echo" 
                                                <div class=\"notification-info\">
                                                    <div class=\"notification-list-user-block\">".$row['title']."
                                                        <div class=\"notification-date\">".$row['date']."</div>
                                                    </div>
                                                </div>
                                            ";}
        }
                                            
                                            else{
                                                
                                                 echo" 
                                                <div class=\"notification-info\">
                                                    <div class=\"notification-list-user-block\">No Notifications
                                                      
                                                    </div>
                                                </div>
                                            ";
                                            }
                                            
                                            ?>
                                          
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="notifications.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-2.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $email; ?></h5>
                                    <span class="badge-dot badge-success mr-1"></span><span class="ml-2">Online</span>
                                </div>
                                <a class="dropdown-item" href="account.php"><i class="fas fa-user mr-2"></i>Account</a>
                             
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li> 
                            <li class="nav-item">
                                                        <a class="nav-link " href="index.php">Dashboard</a>
                                                    </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-hands-helping"></i>Policy</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="mypolicies.php">My Policies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="newpolicy.php">New Policy</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class=" fas fa-dollar-sign"></i>claims</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="myclaims.php">My Claims</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="newclaim.php">New Claim</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                             <li class="nav-item">
                                                        <a class="nav-link " href="account.php">Account</a>
                                                    </li>
                             <li class="nav-item">
                                                        <a class="nav-link " href="notifications.php">Notifications</a>
                                                    </li>
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Policy Details </h2>
                              
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                 
                    
             <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card"><?php
                                    	$pid = $_GET['pid'];
	                                   $planid = $_GET['planid'];
	$result = mysqli_query($con, "SELECT * FROM `policies` WHERE `id` = '".$pid."' ");
	
	if (mysqli_num_rows($result) != 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            		
          
       ?>
                           
                            
                            <div class="card-header bg-info text-center p-3">
                                <h4 class="mb-0 text-white"> Holder Details</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1"><?php echo $row['holder_name']; ?></h1>
                               
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                      <li>Gender : <?php echo $row['holder_gender']; ?></li>
                                    <li>DOB : <?php echo $row['holder_dob']; ?></li>
                                    <li>Term Range : <?php echo $row['term_range']; ?></li>
                                    <li>Medical History :&nbsp; <?php echo "<a href=\" /insurance/user/file/".$row['holder_files']."\" class= 'badge badge-success'> View Document <i class = 'fas fa-arrow-alt-circle-down'></i></a>"; ?></li>
                                    <li>Policy Start Date : <?php echo $row['start_date']; ?></li>
                                    <li>Policy End Date : <?php echo $row['end_date']; ?></li>
                                    <li>Policy Statuse : <?php echo $row['status']; ?></li>
                                      
                                </ul>
                               

                                
                            </div>
                            
                            <?php 
                             }
    
	} ?>
                            
                            
                        </div>
                    </div>
                 
                 
                 
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card"><?php
                                    	
	
	$result = mysqli_query($con, "SELECT * FROM `plans` WHERE `plan_id` = '".$planid."' ");
	
	if (mysqli_num_rows($result) != 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            		
          
       ?>
                            
                            
                            
                            <div class="card-header bg-info text-center p-3">
                                <h4 class="mb-0 text-white"> Plan Details</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1"><?php echo $row['name']; ?></h1>
                               
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                      <li>Sum Amount : <?php echo $row['sum_amt']; ?></li>
                                    <li>Premium Amount : <?php echo $row['premium_amt_annual']; ?></li>
                                    <li>Term Range : <?php echo $row['term_range']; ?></li>
                                    <li>Insurer : <?php echo $row['insurer']; ?></li>
                                    <li>Age Range : <?php echo $row['age_range']; ?></li>
                                   
                                </ul>
                                
                               <?php echo "<a href=\" /insurance/plandetails.php?pid=".$row['plan_id']."\" class=\"btn btn-secondary btn-block btn-lg\">View Details</a>"; ?>

                                
                            </div>
                            
                            <?php 
                             }
    
	} ?>
                            
                            
                        </div>
                    </div>
                 
                 
                 
                 
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
            </div>
                    
                    
                <div class="row">
                    
                    
                                <!-- ============================================================== -->
                 
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                            <div class="card">
                                <h5 class="card-header">All Claims For This Policy</h5>
                                <div class="card-body">
                                   
                                           <?php 
                                            
	
		$select = mysqli_query($con, "SELECT * from claims where policy_id = '".$pid."'  ");
		if (mysqli_num_rows($select) != 0) {
            
            ?>
             <table class="table table-striped">
                                        <thead>
                                            <tr>
                                               
                                                  <th scope="col">Nature of Claim</th>
                                              <th scope="col">Date Detected</th>
                                                <th scope="col">Dr Name</th>
                                                <th scope="col">Dr Phone</th>
                                                <th scope="col">Admitted on</th>
                                                <th scope="col">Discharged On</th>
                                                <th scope="col">Hospital</th>
                                                <th scope="col">Claim Amount</th>
                                                <th scope="col">Claimed On</th>
                                                <th scope="col">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                 
                 <?php
            
         
			
			while ($row = mysqli_fetch_assoc($select)) {       ?>                  
                                            
                                            <tr>
                                                <td><?php echo $row['nature']; ?></td>
                                                <td><?php echo $row['date_detected']; ?></td>
                                                <td><?php echo $row['dr_name']; ?></td>
                                                <td><?php echo $row['dr_phone']; ?></td>
                                                <td><?php echo $row['date_admitted']; ?></td>
                                                <td><?php echo $row['date_discharged']; ?></td>
                                                <td><?php echo $row['hospital']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['claimed_on']; ?></td>
                                                
                                                 <td><?php echo "<a href= '/insurance/plandetails.php?pid=".$row['document']."' class='badge badge-success'> View <i class = 'fas fa-arrow-alt-circle-down'></i></a>"; ?></td>
                                            </tr>
                                            
                                            
                                            <?php    
                                            
                                            }
                                             ?>
                                            </tbody>
                                    </table> 
                                    <?php }
                                            else
                                            {
                                                echo "No Clames Made Yet. <a href= 'claimmypolicy.php?pid=".$pid."'><h5>Claim Now <i class = 'fas fa-arrow-alt-circle-right'></i></h5></a>";
                                                
                                            }
                                                
                                           ?>
                                        
                                </div>
                            </div>
                       
                    </div>
                    
                    
                </div>
                    
                </div>
            </div>
            
            
            
            
            
            
                    <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container">
                            
                            
                            <?php
                            
                            
	
	$result = mysqli_query($con, "SELECT * FROM `premium` WHERE `policy_id` = '".$pid."'");
	
	if (mysqli_num_rows($result) != 0) {  
        
        	while ($row = mysqli_fetch_assoc($result)) {  
                            
                            ?>
                            
                          
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    <img src="due1.png" alt="Picture">
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>Premium for Year : <?php echo $row['due_year']; ?></h3>
                                <?php
                                    
                                    
                                    if( $row['status'] == 'Unpaid' )
                                    {
                                        
                                         echo"<br>Status : &nbsp; &nbsp; <span class='badge badge-danger''>";    echo $row['status']; echo "</span><br><br>";
                                     
                                        echo "<a href='payment.php?pid=".$row['premium_id']."&planid=".$planid."&policyid=".$pid."' class='btn btn-primary btn-lg'>Pay Now</a>";
                                        
                                    
                                    }
                                    else
                                    {
                                    
                                        echo"<br>Status : &nbsp; &nbsp; <span class='badge badge-success''>";    echo $row['status']; echo "</span> <br><br>";
                                    
                                    } ?>
                                    
                                   
                                    
                                    <span class="cd-timeline__date"> Due On: <?php echo $row['due_date']; ?></span>
                                </div>
                                
                            </div>
                        
                     <?php  }  }     ?>
                            
                            
                            
                            
                            
                        </div>
                    </section>
            
            
            
            
            
            
            
            
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2020 Roshan. All rights reserved.
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>











