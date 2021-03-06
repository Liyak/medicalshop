﻿<?php
include_once('connect.php');
$conn=OpenCon();

 echo "Connected Successfully";
$query="SELECT * FROM medicine WHERE DATEDIFF(expiryDate, CURDATE()) BETWEEN 0 AND 30";
$filter_Result=mysqli_query($conn,$query) or die(mysql_error());

   
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>medBay</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                               <li>
                                
                            
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
                     <h2>Out of Expiry</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
             
                <div class="row"> 
                    
                      
                               <div class="col-md-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Out Of Expiry
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Medicine ID</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Supplier</th>
                                            <th>Date Of Expiry</th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($filter_Result)):?>
                                        <tr class="odd gradeX">
                                            <?php  $id=$row['mID'];?>
                                            <td><?php echo $row['mID'];?></td>
                                            
                                            <td><?php echo $row['mname'];?></td>
                                            <td><?php echo $row['bID'];?></td>
                                            <td class="center"><?php echo $row['sID'];?></td>
                                            <td><?php echo $row['expiryDate'];?></td>
                                            <td class="center"><form method="POST"><input class="btn btn-primary" type="Submit" value="Update Stock" name="update"></input></form></td>
                                            <?php
                                            if(isset($_POST['update']))
                                                {
                                                   
                                                  $sql="UPDATE medicine SET leftCount= '0' WHERE mID=$id";
                                                  mysqli_query($conn,$sql) or die(mysql_error());
                                                  echo $leftCount;
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
                            <!-------------------------------------------------------------------------------------
                            
                       
                <div class="row">                     
                      
                               <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>            
                </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>            
                </div> 
                
           </div>
                 <!-- /. ROW  -->
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
