<?php
include_once('connect.php');
$conn = OpenCon();
 
echo "Connected Successfully";
if (isset($_POST['submit']))
{
  $bname=$_POST['bname'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sql=("insert into brand(bname,address,email,phone)values('$bname','$address','$email','$phone')");
        mysqli_query($conn,$sql);
        if (mysqli_query($db,$sql )){
    echo "Successfully inserted ".mysqli_affected_rows($db )." row";
} else {
    echo "Error occurred: ".mysqli_error($db );
}
}
?>

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
                <a class="navbar-brand" href="index.html">medBay</a> 
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
                        <a class="active-menu"   href="ui.php"><i class="fa fa-desktop fa-3x"></i>ADD Medicines<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="supplier.php">Add Supplier</a>
                            </li>
                            <li>
                                <a href="brand.php">Add Brand</a>
                            </li>
                            <li>
                                <a href="#">Add Medicine</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
                           <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>   
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>               
                    
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Supplier,Brand and Medicines..</h2>   
                        
                    </div>
                </div>
                <!-- /. ROW  -->
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
                                    <form role="form" method="POST" action="">
                                           <div class="form-group">
                                            <label>Brand Name</label>
                                            <input class="form-control"  name="bname" />
                                            </div>
                                    </div>

                               <div class="col-md-6">
            
                                    <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Brand ID </label>
                                                <input class="form-control" id="disabledInput" name="bID" type="text" placeholder="" disabled />
                                            </div>
                   
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Contact Address</label>
                                            <textarea class="form-control" name="address" rows="3"></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                    
                                           <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control"  name="email" />
                                            </div>
                                            </div>
                                          <div class="col-md-6">
                                    
                                           <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control"  name="phone" />
                                            </div>  
                                        </div>
                                <div class="col-lg-6">
                       <input class="btn btn-primary" type="Submit" name="submit"></input>
                   </div>
                    <div class="col-lg-6">
                       <a href="medicine.html" class="btn btn-primary">Next>></a>
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
