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
                                            <a class="nav-link active" href="newclaim.php">New Claim</a>
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
        
        
          <?php
	
                                            
                                            
                if (isset($_GET['pid'])) {
              $pid=$_GET['pid'];
   
   }
      
                                            else{
	header("Location: /insurance/login.html");                } ?>
        
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Applicaion </h2>
                              
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">New Claim</li>
                                          
                                        </ol>
                                    </nav>
                                </div>
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
                            <div class="card">
                                <h5 class="card-header">Enter Claim Details</h5>
                                <div class="card-body">
                                    <form action= "claimmypolicyreq.php?pid=<?php echo $pid ?>" id="basicform" method="post" enctype="multipart/form-data" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputnature"> Nature of Disease/Illness/Injury</label>
                                            <input id="inputnature" type="text" name="nature" data-parsley-trigger="change" required="" placeholder="Enter Nature of Disease/Illness/Injury" autocomplete="off" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label for="inputdob"> Date Of Injury/Disesse/Illness Detected</label>
                                            <input id="inputdob" type="date" name="doi" data-parsley-trigger="change" required="" placeholder="Enter Date of detection" max= <?php echo date('Y-m-d'); ?>  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName"> Name Of Medical Practitioner</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter Medical Practitioner name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputGender"> Medical Practitioner Phone</label>
                                            <input id="inputGender" type="number" name="phone" data-parsley-trigger="change" required="" placeholder="Enter Medical Practitioner Phone" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName"> Hospital</label>
                                            <input id="inputUserName" type="text" name="hospital" data-parsley-trigger="change" required="" placeholder="Enter Hospital name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdob"> Date Of Admission</label>
                                            <input id="inputdob" type="date" name="doa" data-parsley-trigger="change" required="" placeholder="Enter Date of Admission" max= <?php echo date('Y-m-d'); ?>  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdob"> Date Of Discharge</label>
                                            <input id="inputdob" type="date" name="dod" data-parsley-trigger="change" required="" placeholder="Enter Date of Discharge" max= <?php echo date('Y-m-d'); ?>  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName"> Claim Amount</label>
                                            <input id="inputUserName" type="text" name="amt" data-parsley-trigger="change" required="" placeholder="Enter The Amount to be Claimed" autocomplete="off" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="inputdoc"> Upload Documents* (Read the List of Documents Required) </label>
                                            <input id="file" type="File" name="file" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                  
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                 
                 
                 
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            
                            
                            <div class="card-header bg-info text-center p-3">
                                <h4 class="mb-0 text-white"> Require Documents are</h4>
                            </div>
                            <div class="card-body text-center">
                                <h1 class="mb-1">* Documents</h1>
                                
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-unstyled bullet-check font-14">
                                    <li>Your hospital bills, which have to be stamped and signed by the hospital authorities</li>
                                    <li>Discharge card</li>
                                    <li>X-ray films and other test results such as blood test, urine test etc.</li>
                                    <li>Medicine bills</li>
                                    <li>Other relevant documents relating to the cause of treatment</li>
                                    
                                    
                                   
                                </ul>
                                <p>All these Documents should be scanned to a sing pdf / word file and should be uploadded</p>
                                
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











