﻿<?php
include_once('connect.php');
$conn = OpenCon();
 
echo "Connected Successfully";
if (isset($_POST['Submit']))
{
  $mname=$_POST['mname'];

  $genere=$_POST['genere'];
   $description=$_POST['description'];
  
   $ArrivalDate=$_POST['ArrivalDate'];
   $ExpiryDate=$_POST['ExpiryDate'];
   $cp=$_POST['cp'];
   $sp=$_POST['sp'];
   $threshold=$_POST['threshold'];
   $pcount=$_POST['pcount'];
   $lcount=$_POST['lcount'];
   $rack=$_POST['rack'];
   $row=$_POST['row'];
  $column=$_POST['column'];
 $location=$rack.$row.$column;


 echo  $sql=("insert into medicine(mname,genere,description,arrivalDate,expiryDate,threshold,purchaseCount,leftCount,location)values('$mname',' $genere','$description','$ArrivalDate','$ExpiryDate','$cp','$sp','$threshold','$pcount','$lcount','$location')");
        mysqli_query($conn,$sql);
        if (mysqli_query($db,$sql)){
    echo "Successfully inserted ".mysqli_affected_rows($db )."row";
}
 else {
    echo "Error occurred:".mysqli_error($db );
}
}

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
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">medBay</a> 
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
                        <a class="active-menu"   href="ui.html"><i class="fa fa-desktop fa-3x"></i>ADD Medicines<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="supplier.php">Add Supplier</a>
                            </li>
                            <li>
                                <a href="Brand.php">Add Brand</a>
                            </li>
                            <li>
                                <a href="medicine.php">Add Medicine</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Out of stock</a>
                    </li>
						   <li  >
                        <a  href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Expired</a>
                    </li>	
                      <li >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Bookings</a>
                    </li>
                    		
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Sales Report</a>
                            </li>
                            <li>
                                <a href="#">Out of stock Report</a>
                            </li>
                            <li>
                                <a href="#">Out of Expired Report</a>
                            </li>
                            
                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Feedback</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Supplier,Brand and Medicines..</h2>   
                        
                    </div>
                </div>
                <!-- /. ROW  
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        ADD Supplier....
                        </div>
                       
                        <div class="panel-body">

                            <div class="row">
                                   <div class="col-md-6">
                                    <form role="form">
                                           <div class="form-group">
                                            <label>Supplier Name</label>
                                            <input class="form-control" />
                                            </div>
                                    </div>

                               <div class="col-md-6">
            
                                    <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Supplier ID </label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="" disabled />
                      
                                            </div>
                   
                                    </div>
                                     <div class="col-md-6">
                                    <form role="form">
                                           <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" />
                                            </div>
                                    </div>
                                     <div class="col-md-6">
                                    <form role="form">
                                           <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" />
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label>Certification</label>
                                            <input type="file" />
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-6">
                       <a href="#" class="btn btn-primary">Submit</a>
                   </div>
                    <div class="col-lg-6">
                       <a href="brand.html" class="btn btn-primary">Next>></a>
                   </div>
               </form>
           </div>
</div>

 <!-- /. ROW  
               <hr />  
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        Add Brand.....
                        </div>
                       
                        <div class="panel-body">
                             <div class="row">
                                   <div class="col-md-6">
                                    <form role="form">
                                           <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control" />
                                            </div>
                                    </div>

                               <div class="col-md-6">
            
                                    <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Brand ID </label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="" disabled />
                                            </div>
                   
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Contact Address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                    
                                           <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" />
                                            </div>
                                            </div>
                                          <div class="col-md-6">
                                    
                                           <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" />
                                            </div>  
                                        </div>
                                <div class="col-lg-6">
                       <a href="#" class="btn btn-primary">Submit</a>
                   </div>
                    <div class="col-lg-6">
                       <a href="medicine.html" class="btn btn-primary">Next>></a>
                   </div>
               </form>
           </div>
---------------------------------------------------->

                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    
                      <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                         sign up
                        </div>        
                                      
                        <div class="panel-body"> 
                            <div class="row">
                                   <div class="col-md-8">
                                    <form role="form" method="POST" action="">
                                           <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" />
                                            </div>
                                    </div>
                                     <div class="col-md-8">
            
                                    <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Medicine ID </label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="" disabled  name="mID" />
                                            </div>
                   
                                    </div>
                                             <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Select">Genere</label>
                                                <select id="Select" class="form-control" name="genere">
                                                    <option value="0"> select</option>
                                                    <Option value="Tablet">Tablet</OPTION>
                                                    <option value="Capsule">Capsule</option>
                                                     <option value="Syrup">Syrup</option>
                                                    <option value="Oinment">Oinment</option>
                                                </select>
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Select">Brand</label>
                                                <select id="Select" class="form-control">
                                                    <option value="0"> select</option>
                                                    <Option value="1">tttt</OPTION>
                                                    <option value="2">tttt</option>
                                                     <option value="3">dddd</option>
                                                    <option value="4">gghh</option>
                                                </select>
                                            </div>
                                        </div>
                                                   
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="4" name="description"></textarea>
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Select">Supplier</label>
                                                <select id="Select" class="form-control">
                                                    <option value="0"> select</option>
                                                    <Option value="1">tttt</OPTION>
                                                    <option value="2">tttt</option>
                                                     <option value="3">dddd</option>
                                                    <option value="4">gghh</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                      <div class="form-group">
                                            <label>Date Of Arrival</label>
                                    <input  type="date" name="ArrivalDate"  class="form-control" />
                                            
                                   </div> 
                                    </div>

                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cost Price</label>
                                            <input class="form-control" name="cp" />
                                            </div>
                                        </div> 
                                     <div class="col-md-6">
                                      <div class="form-group">
                                            <label>Date Of Expiry</label>
                                    <input  type="date" name="ExpiryDate"  class="form-control" />
                                            
                                   </div> 
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Selling Price</label>
                                            <input class="form-control" name="sp" />
                                            </div>
                                        </div> 

                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Threshold</label>
                                            <input class="form-control" name="threshold" />
                                           </div> 
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Total purchased</label>
                                            <input class="form-control" name="pcount" />
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Total Left</label>
                                            <input class="form-control" name="lcount" />
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Select">Location</label>
                                                <select id="Select" class="form-control" name="rack">
                                                    <option value="0"> Rack</option>
                                                    <Option value="R1">R1</OPTION>
                                                    <option value="R2">R2</option>
                                                     <option value="R3">R3</option>
                                                    <option value="R4">R4</option>
                                                </select>
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Select">    </label>
                                                <select id="Select" class="form-control" name="row">
                                                    <option value="0"> Row</option>
                                                    <Option value="01">01</OPTION>
                                                    <option value="02">02</option>
                                                     <option value="03">03</option>
                                                    <option value="04">04</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Select">     </label>
                                                <select id="Select" class="form-control" name="column">
                                                    <option value="0"> Column</option>
                                                    <Option value="01">01</OPTION>
                                                    <option value="02">02</option>
                                                     <option value="03">03</option>
                                                    <option value="04">04</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                       <input class="btn btn-primary" type="Submit" name="Submit"></input>
                   </div>
                    <div class="col-lg-6">
                       <a href="#" class="btn btn-primary">Cancel</a>
                   </div>
               
           </div>
       </form>
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
