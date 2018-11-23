<?php
include_once('connect.php');
$conn = OpenCon();
 
echo "Connected Successfully";
 
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $name=$_POST['name'];
  $message=$_POST['message'];
  $sql=("insert into feedback(email,name,message)values('$email','$name','$message')");
   mysqli_query($conn,$sql);
        exit;
}

?>


<html>
<head>
    
</head>
<body>
    <div class="panel panel-default">
    <div class="panel-heading"><h2>Feedback</h2></div>
    <div class="panel panel-default">
    <div class="panel-body">
   <div class="row">
     <div class="col-md-12">
    
      <form role="form" action="#Home" method="POST">
        <div class="form-group">
         <label for="email">Email ID:</label>
           <input type="text" class="form-control" id="email" placeholder="Enter your email id " name="email">
         </div>
 <div class="form-group">
      <label for="name">Name:</label>
     <input type="text" class="form-control" id="name" name="name">
    </div>
        
            <div class="form-group">
            <label>Feedback</label>
            <textarea class="form-control" rows="3" name="message"></textarea>
           </div>
        <div class="form-group">
  
     <input type="submit" name="submit"  class="btn btn-primary btn-block">Submit</input>
 </div>
</div>
  </form>
</div>
</div>
</body>
</html>
        