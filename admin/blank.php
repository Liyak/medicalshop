﻿<?php
include_once('connect.php');
$conn=OpenCon();
 echo "Connected Successfully";
$query="SELECT * FROM feedback where response=''";
$filter_Result=mysqli_query($conn,$query) or die(mysql_error());
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> ADD Medicines</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i>Out Of Stock</a>
                    </li>
                           <li  >
                        <a  href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i>Out Of Expiry</a>
                    </li>   
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Bookings</a>
                    </li>
                                
                    
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Sales Report</a>
                            </li>
                            <li>
                                <a href="#">Out Of Stock Report</a>
                            </li>
                            <li>
                                <a href="#">Out of expiry Report</a>
                               </li>
                                
                            
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i>Feedback</a>
                    </li>   
                </ul>
               
                    
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome ADMIN </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             FEEDBACKS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Feedback ID</th>
                                            <th>Customer ID</th>
                                            <th>View Feedback</th>
                                            
                                            <th>Response</th>
                                            <th>ADD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($filter_Result)):?>
                                        <tr class="odd gradeX">
                                            
                                            <td><?php echo $row['feedbackID'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['message'];?></td>
                                            <td><form method="POST" action=""><textarea class="form-control" rows="3" name="message"></textarea></td>
                                            <td><input type="Submit" class="btn btn-primary btn-block" name="submit" value="ADD"></input></form></td>
                                            <?php
                                             $response=$_POST['message'];
                                            if(isset($_POST['submit']))
                                                {
                                                   $id=$row['feedbackID'];
                                                  $sql="UPDATE feedback SET response='$response' WHERE feedbackID='$id'";
                                                  mysqli_query($conn,$sql) or die(mysql_error());
                                                  
                                                 }
                                                ?>
                                        </tr>
                                        
                                       <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
               


                
            </div>  

           
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
