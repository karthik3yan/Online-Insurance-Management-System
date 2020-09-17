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
    <title>INSURANCE - ADMIN PANEL</title>
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
                <a class="navbar-brand" href="index.php">InsurancePress - Admin Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <?php
	session_start();
                                            
                                            
                if (isset($_SESSION['admin'])) {
              
   $name = $_SESSION['admin'];
   }
      
                                            else{
	header("Location: login.php");                }
                                         ?>
                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-2.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $name; ?></h5>
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
                                                        <a class="nav-link active" href="index.php">Policy Requests</a>
                                                    </li>
                          <li class="nav-item">
                                                        <a class="nav-link " href="claimreq.php">Claim Requests</a>
                                                    </li>
                            <li class="nav-item">
                                                        <a class="nav-link " href="newplan.php">Add New Plans</a>
                                                    </li>
                            <li class="nav-item">
                                                        <a class="nav-link " href="reports.php">Generate Reports</a>
                                                    </li>
                             <li class="nav-item">
                                                        <a class="nav-link " href="account.php">Account</a>
                                                    </li>
                             <li class="nav-item">
                                                        <a class="nav-link " href="logout.php"> <i class="fas fa-sign-out-alt"></i>Logout</a>
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
                                <h2 class="pageheader-title">List Of Request for New Policies </h2>
                              
                                
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
                       
               
                 
              
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                            <div class="card">
                                <h5 class="card-header">All Request</h5>
                                <div class="card-body">
                                   
                                           <?php 
                        include ('dbconn.php');
	
		$select = mysqli_query($con, "SELECT * from policy_req ");
		if (mysqli_num_rows($select) != 0) {
            
            ?>
             <table class="table table-striped">
                                        <thead>
                                            <tr>
                                               <th scope="col">User</th>
                                                <th scope="col">Plan Name</th>
                                                <th scope="col">Holder Name</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">DOB</th>
                                                <th scope="col">Term Range</th>
                                                
                                                <th scope="col">Medical History</th>
                                                 <th scope="col">Approve / Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                 
                 <?php
            
			
			while ($row = mysqli_fetch_assoc($select)) {       ?>                  
                                            
                                            <tr>
                                                <td><?php echo "<a href= 'viewuser.php?uid=".$row['user_email']."' class='badge badge-primary'>";  echo $row['user_email']; echo "&nbsp; <i class = 'fas fa-arrow-alt-circle-right'></i>";?></td>
                                                <td><?php 
	$result1 = mysqli_query($con, "SELECT * FROM `plans` WHERE `plan_id` = '".$row['policy_id']."' ");
	
	if (mysqli_num_rows($result1) != 0) {

        while ($row1 = mysqli_fetch_assoc($result1)) {
            echo $row1['name'];
            
            echo "<a href= '/insurance/plandetails.php?pid=".$row1['plan_id']."'> (view) &nbsp; <i class = 'fas fa-arrow-alt-circle-right'></i></a>";
                                                    
        }}
                                                    ?></td>
                                                <td><?php echo $row['holder_name']; ?></td>
                                                <td><?php echo $row['holder_gender']; ?></td>
                                                <td><?php echo $row['holder_dob']; ?></td>
                                                <td><?php echo $row['term_range']; ?></td>
                                                 <td><?php echo "<a href= '/insurance/user/file/".$row['holder_files']."' class= 'badge badge-success'>View Data <i class = 'fas fa-arrow-alt-circle-down'></i></a>"; ?></td>
                                                <td><a href="approve.php?pid=<?php echo $row['id'];?>" class="btn btn-sm btn-outline-light">Approve &nbsp; <i class="fa fa-check"></i></a>
                                                <a href="delete.php?pid=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-light"> <i class="far fa-trash-alt"></i></a>
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                            <?php    
                                            
                                            }
                                             ?>
                                            </tbody>
                                    </table> 
                                    <?php }
                                            else
                                            {
                                                echo "No policies Requests";
                                                
                                            }
                                                
                                           ?>
                                        
                                </div>
                            </div>
                       
                    </div>
                    
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
            </div>
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
            
            
            
            
            
            
            
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











