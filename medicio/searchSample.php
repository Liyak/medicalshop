<?php

if(isset($_POST['search']))
{
  $qname = $_POST['query'];
  $query = "SELECT * FROM medicine WHERE CONCAT(mID,mname,location,sp,leftCount) LIKE '%".$qname."%'";
  $search_result = filterTable($query);
}


function filterTable($query)
{
include_once('connect.php');
$conn = OpenCon();
 echo "Connected Successfully";
    $filter_Result=mysqli_query($conn,$query) or die(mysql_error());
    return $filter_Result;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-----------------------------------
	 <div class="container">
          <form  class="form-inline" action="">
    	    <div class="row">
    	       	<div class="form-group">
		       
     
            <input type="text" class="form-control" id="name" placeholder="search..." name="search">
     
 </div>
 </div>
 <div>
  <button type="button" class="btn btn-success glyphicon glyphicon-search"></button>
</div>
</form>
</div>
--------------------->
<div class="container">
  <!-------------
  <div class="form-horizontal">
<div class="input-group">
   <input type="text" class="form-control" placeholder="Search....">
   <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
   </span>
</div>
</div>
------------------------>
 <div class="row">

                         <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <form action="#" method="POST">
                            <div class="input-group">
     
                               <input type="text" class="form-control"  placeholder="search...." name="query" />
                                     <span class="form-group input-group-btn">
                                       <input class="btn btn-default" type="Submit" value="Go" name="search"></input>
                                    </span>
                            </div>
                            </form>
                           
                        </div>
                    </div>
 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Current stock
                        </div>
                        <div class="panel-body">
                            <div class="row">
                <div class="table-responsive">
                   
                               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                        <tr>
                                            <th>Medicine ID</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>selling price</th>
                                            <th>Availability</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($search_result)):?>
                                            <tr class="odd gradeX">
                                            <td bgcolor=#FEE9A9><?php echo $row['mID'];?></td>
                                            <td bgcolor=#FEE9A9><?php echo $row['mname'];?></td>
                                            <td bgcolor=#FEE9A9><?php echo $row['location'];?></td>
                                            <td bgcolor=#FEE9A9><?php echo $row['sp'];?></td>
                                           
                                              <td bgcolor=#FEE9A9><?php if($row['leftCount']>0)  echo "yes"; ?></td>
                                             
                                            
                                            
                                        </tr>
                                        
                                        <?php endwhile;?>


                                         </tbody>
                                </table>
                                
                            </div>
                            
                        </div>

                    </div>
</body>
</html>


