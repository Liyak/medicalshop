
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
      header("Location:#Medicines");
         }
         else
         {
   echo "<script>alert('User name or Password is incorrect')</script>";
                }
              }
?>


<html>

<head>
</head>

<body>

<h2>Sign In</h2>


<form role="form" class="lead" method="POST" action="">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Email ID/UserID</label>
                          <input type="text" name="username" id="username" class="form-control input-md">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" id="password" class="form-control input-md">
                        </div>
                      </div>
 <
    <button type="submit" >Login</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1" "display:inline-block">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
    <br><br>
    <span class="psw">Do not have an account?  <a href="#signup" class="to_register">Sign Up</a></span>
    
  </div>
</form>
</body>
</html>