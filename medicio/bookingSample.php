<?php
session_start();
include_once('connect.php');
$conn=OpenCon();
 echo "Connected Successfully";
$query="SELECT mname FROM medicine";
$filter_Result=mysqli_query($conn,$query) or die(mysql_error());

?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="panel panel-default">
    <div class="panel-heading"><h3>Add Your Orders...</h3></div>
     <div class="panel-body">
                    <div class="container">
                        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:70%">                                                                                
                            <div class="table-responsive">
                                   
                              <table class="table">
                                  <thead>
                                  <tr>
                                  <th>#</th>
                                  <th>Medicine Name</th>
                                  
                                  
                                  <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    

                                    <tr>
                                    <td></td>
                                    <td>
                                      <select id="select" name="medicine" class="form-control">
                                      <option value="0"></option>
                                      <?php
                                  while($row=mysqli_fetch_assoc($filter_Result)):?>
                                   
                                  
                                     <option value="<?php echo $row['mname']; ?>"><?php echo $row['mname']; ?></option>
                                    <?php echo $row['mname']; ?>
                                    
                                    <?php endwhile;?>
                                    <?php
                                    $medicine=$_POST['medicine'];?>

                                  </select><br>
                                  <form method="POST"><input type="submit" name="submit" VALUE="More>>" class="btn btn-primary"></input></form>
                                  
                                </td>
                                   
                                    <td><a href="index.php#ViewCart">Add to Cart</a></td>
                              <?php
                              $_SESSION['mname']=$medicine;
                                ?>
                                  </tr>
                           
                               </tbody>
                              
                            </table>
                          
                        </div>
                    </div>
</div></div></td>
<div class="panel-footer">
  <div class="row">
   <div class="col-xs-4">
                <input type="submit" name="submit" value="VIEW CART" class="btn btn-primary"></input>
            </div>

            <div class="col-xs-4">
                <button id="cancel" name="button" value="cancel" class="btn btn-primary">Cancel</button>
            </div>

  </div>
</div>
 </div>


</body>
</html>
