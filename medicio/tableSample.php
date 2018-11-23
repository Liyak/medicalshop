<?php

include_once('connect.php');
$conn=OpenCon();
 echo "Connected Successfully";
 echo $medicine=$_SESSION['mname'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
	<div class="panel panel-default">
    <div class="panel-heading"><h3>Your Cart...</h3></div>
     <div class="panel-body">
                    <div class="container">
                        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:70%">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<form action="" method="GET"> 
   
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							 Medicine Name
						</th>
						<th class="text-center">
							Quantity
						</th>
						<th class="text-center">
							Unit Price
						</th>
						<th class="text-center">
							Total
						</th>
						<th class="text-center">
							Prescription
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
						<input type="text" name='name0'  placeholder='Medicine' class="form-control"/>
						</td>
						<td>
						<input type="text" name='mail0' placeholder='Quantity' class="form-control"/>
						</td>
						<td>
						<input type="text" name='mobile0' placeholder='Unit Price' class="form-control"/>
						</td>
						<td>
						<input type="text" name='mobile0' placeholder='Total' class="form-control"/>
						</td>
						<td>
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
						
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row" class="btn btn-primary pull-left">Add Row</a><a id='delete_row' class="btn btn-primary pull-right">Delete Row</a>
</div>
</div></div>
<div class="panel-footer">
  <div class="row">
   <div class="col-xs-4">
                <button id="submit" name="button" value="register" class="btn btn-primary">Generate bill</button>
            </div>

            <div class="col-xs-4">
                <button id="cancel" name="button" value="cancel" class="btn btn-primary">Clear cart</button>
            </div>

  </div>

 </div>
</div>
</body>
</html>