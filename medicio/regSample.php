<?php

if (isset($_POST['submit']))
{
  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $place=$_POST['place'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $conpassword=$_POST['Cpwd'];
  if($pwd==$Cpwd)
  {
  $query = mysqli_query($conn, "SELECT * FROM registration WHERE email='".$email."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
  {
  
  $sql=("insert into registration(name,age,gender,place,phone,email,password)values('$name','$age',' $gender','$place',' $phone','$email','$password')");
        mysqli_query($conn,$sql);

$id=mysqli_insert_id($conn);
session_start();
$_SESSION["id"]=$id;
  echo $id;
  $sqlp=("insert into login(username,password,type,loginid)values('$email','$password','user','$id')");
        mysqli_query($conn, $sqlp);

exit;
    
  }
  }
}
   
   closeCon($conn);



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
    <div class="panel-heading">Sign Up</div>
    <div class="panel panel-default">
    <div class="panel-body">
	 <div class="row">
     <div class="col-md-12">
    
    	<form role="form" action="#Home" method="POST">
      	<div class="form-group">
	       <label for="Name">Full Name:</label>
           <input type="text" class="form-control" id="name" placeholder="Enter full Name" name="name">
         </div>
 <div class="form-group">
    	<label for="Age">Age:</label>
     <input type="number" class="form-control" id="age" name="age">
    </div>

  <div class="form-group">
  	<label for="Gender">Gender:</label><br>
      <label class="radio-inline" width="auto"><input type="radio" name="gender" checked>Male</label>
      <label class="radio-inline" width="auto"><input type="radio" name="gender">Female</label>
	</div>
<div class="form-group">
	<label for="place">Place:</label>
      <input type="text" class="form-control" id="place" placeholder="Enter place" name="place">
    </div>

<div class="form-group">
    	<label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
  </div>

 <div class="form-group">
 	 <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
<div class="form-group">
    	<label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    
</div>
 <div class="form-group">
    	
      <label for="Cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="Cpwd" placeholder="Confirm password" name="Cpwd">
    </div>

<br>

<div class="form-group">
	
     <input type="submit" name="submit"  class="btn btn-primary btn-block">Submit</input>
 </div>
</div>
  </form>
</div>
</div>

</body>
</html>