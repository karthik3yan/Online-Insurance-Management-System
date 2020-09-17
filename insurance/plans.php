<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Insurance - Press</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="ie7/ie7.css">
    <!--<![endif]-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        <i class="ti-location-pin"></i> Kalamaserry , Ernakulam
                    </div>
                  
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        Insurance<span>Press</span>
                    </a>
                    <p>Call Us Now <b>+215 (362) 4579</b></p>
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                       
                         <li>
                            <a href="plans.php">Plans</a>
                        </li>
                       
                        <li>
                            <a href="login.html" class="btn-default">Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="clear"></div>
    <div id="page-content">
        <section class="breadcrumb">
            <div class="container">
                <h2>All Term Plans</h2>
                <ul>
                    <li><a href="index.html">Home</a> ></li>
                    <li><a href="#">Plans</a></li>
                </ul>
            </div>
        </section>
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        
                        
                        
                        
                        
                        <?php
                        
                        
                        
                        if (isset($_POST['search'])) {
                            
        $a=$_POST['search'];
                            include ('dbconn.php');
		$select = mysqli_query($con, "SELECT  `plan_id`, `name`, `sum_amt`, `premium_amt_annual`, `term_range`, LEFT(details, 250) AS details, `insurer`, `age_range` from plans where name LIKE '%$a%'");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo"  <div class=\"single-post\">
                            
                            <h2 class=\"blog-title\">".$row['name']."</h2>
                            <div class=\"blog-meta\"><i class=\"fa fa-calendar-o\"></i>&nbsp;Age Range :" .$row['age_range']." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-heart\"></i>&nbsp;By: ".$row['insurer']."</div>
                            <p>".$row['details'].".....</p>
                            <div class=\"blog-btn\">
                                <a href=\"plandetails.php?pid=".$row['plan_id']."\" class=\"btn-default\">Read More</a>
                               
                            </div>
                        </div>";
                
              
			}
			
		}   
                            
                            
                            
                   }
                   
                   else
                   {
                                 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT  `plan_id`, `name`, `sum_amt`, `premium_amt_annual`, `term_range`, LEFT(details, 250) AS details, `insurer`, `age_range` from plans");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo"  <div class=\"single-post\">
                            
                            <h2 class=\"blog-title\">".$row['name']."</h2>
                            <div class=\"blog-meta\"><i class=\"fa fa-calendar-o\"></i>&nbsp;Age Range :" .$row['age_range']." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class=\"fa fa-heart\"></i>&nbsp;By: ".$row['insurer']."</div>
                            <p>".$row['details'].".....</p>
                            <div class=\"blog-btn\">
                                <a href=\"plandetails.php?pid=".$row['plan_id']."\" class=\"btn-default\">Read More</a>
                               
                            </div>
                        </div>";
                
              
			}
			
		} 
                    
                   }
                        
          
                   ?>     
                        
                        
                       
                      
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <div class="blog-post">
                            <!-- Search -->
                            <h2>Search</h2>
                           
                                <form method="post" action="plans.php">
                              <input type="text" name="search" class="form-control search" placeholder="Search">
                               
                                <button class="btn btn-default btn-search" type="submit"><i class="fa fa-search"></i></button>
                                 </form>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="clear"></div>
    <footer>
        <div class="container">
            <div class="row contact-sec">
                <div class="col-md-5 col-lg-5">
                    <h2>Insurance<span>Press</span></h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Kalamasery
                                <br/>Zip - 680110</p>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone"></i> +91 123 456 7890</a></li>
                                <li><a href="#"><i class="ti-email"></i> info@bootstrapmart.com</a></li>
                            </ul>
                        </div>
                    </div>
                 
                </div>
                
            </div>
        
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        Copyright &copy; 2020  by Roshan
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
