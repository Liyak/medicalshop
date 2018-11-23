
<?php




// If form submitted, insert values into the database.
if (isset($_POST['Login'])){
        // removes backslashes
  $username = stripslashes($_POST['uname']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($conn,$username);
  $password = stripslashes($_POST['psw']);
  $password = mysqli_real_escape_string($conn,$password);
  //Checking is user existing in the database or not
        $query = "SELECT * FROM login WHERE username='$username'
and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['username'] = $username;
            // Redirect user to index.php
      
         }
       }
         else
         {
   echo "<script>alert('User name or Password is incorrect')</script>";
                }
              
?>


<html>

<head>

</head>

<body>
    <div class="row">
                                       <div class="col-md-12">
                                        <form role="form" method="POST" action="#Medicines">
                                           <div class="form-group">
                                            <label>UserID/Email ID</label>
                                            <input class="form-control"   name="uname"/>
                                            </div>
                                    
                                   
                                       
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="psw" />
                                            </div>
                                        </div> 
                                    </div>
                                        <input type="submit" name="Login" value="Submit" class="btn btn-skin btn-block btn-lg">

      
 
    
    <span class="psw">Forgot <a href="#">password?</a></span>
    <br><br>
    <span class="psw">Do not have an account?  <a href="#signup" class="to_register">Sign Up</a></span>
    
  

</body>
</html>