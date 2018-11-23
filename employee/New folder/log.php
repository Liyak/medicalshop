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
      header("Location:index.php");
         }
         else
         {
   echo "<script>alert('User name or Password is incorrect')</script>";
                }
              }
?>


<html>

<head>
<!---------------------
 <?php
   //include CSS Style Sheet
   echo"<link rel='stylesheet' type='text/css' href='log.css' />";
   ?>
 ---------------------> 
</head>

<body>

<h2>Sign In</h2>

<form action="#Medicines" method="POST">
<table align="center" cellpadding = "10" border="0"></table>
 <div class="container">
  <tr><td>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter email Id/User Id" name="uname" required class="form-control"></td></tr>
    <br>
    <br>

    <tr><td>
    <label for="psw"><b>Password</b></label>
    
    <input type="password" placeholder="Enter Password" name="psw" required class="form-control"></td></tr>
    <br><br>
        
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