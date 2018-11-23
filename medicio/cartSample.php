<?php

include_once('connect.php');
$conn=OpenCon();
 echo "Connected Successfully";
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
  <div class="panel panel-default">
    <div class="panel-heading"><h3>Your Cart...</h3></div>
     <div class="panel-body">
                    <div class="container">
                        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:70%">

<div class="container">
   <form action="" method="GET">  
   $medicine= $_SESSION['mname']     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL No.</th>
        <th>Medicine Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total</th>
        <th>Prescription</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>$medicine</td>
        <td>10</td>
        <th>25</th>
        <th>250</th>
        <th>
          <div class="input-group mb-3">
            <!-----------------
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  --------------->
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
  </div>
</div></th>
      </tr>
      
    </tbody>
  </table>
</div>
</div></div></div>

  <div class="panel-footer">
  <div class="row">
   <div class="col-xs-4">
                <button id="submit" name="button" value="register" class="btn btn-primary">Generate bill Cart</button>
            </div>

            <div class="col-xs-4">
                <button id="cancel" name="button" value="cancel" class="btn btn-primary">Clear cart</button>
            </div>

  </div>

 </div></div>

</body>
</html>
