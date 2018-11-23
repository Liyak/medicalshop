<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='reg.css' />";
   ?>
</head>
<body>
  
   <form>
	<table align="center" cellpadding = "10" border="0" bgcolor="pink">
  <tr><th colspan="2" align="center"><pre><h1>Sign up</h1></pre></th></tr>
    
   	
  	<div class="input-group">
      <tr>
        <td>
  	   <label> Full NAME</label></td>
  	  <td><input type="text" placeholder="Enter full name" name="First name" maxlength="30"/></td>
    </tr>
  	</div>
    <br>
    
    <div class="input-group">
      <tr><td>
      <label>Age</label></td>
      <td><input type="number" placeholder="Enter age" name="Age" maxlength="30"/></div></td></tr>
      <tr>
      <td>
       <div class="input-group">
      <label>Gender</label></td>
      <td><input type="radio" name="rd1" value="Male" width="20%">Male
        <input type="radio" name="rd2" value="Male" width="20%">Female </div></td>
    
    </tr>

      <td> <div>
      <label>Place</label></td>
      <td><input type="text" name="place" maxlength="30"/></td>
      </tr>
      </div>

   
    <td><div class="input-group">
      <label>Phone</label></td>
      <td><input type="text" name="phone" maxlength="20"/></div></td>
    </tr>
  </div>
  

      
      <td><div class="input-group">
      <label>Email or Username</label></td>
      <td><input type="text" name="email" maxlength="20"/></div></td>
    </tr>
  </div>
  

  	
    <div class="input-group">
      <tr>
       <td> 
      <label>Password</label></td>
      <td><input type="password" placeholder="Enter Password" name="password_1"></td>
    </div>
    <div class="input-group">
      <tr>
       <td> 
      <label>Confirm Password</label></td>
      <td><input type="password" placeholder="ReEnter Password" name="password_2"></td>
    </div>
   
  	<div class="input-group">
      <tr>
    
  	  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn" name="reg_user">Register</button></td>
      <td><button type="submit" class="btn" name="cancel">Cancel</button></td>
    </tr>
  	</div>
    <br>
  	<p>
      <tr align="center"><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  		Already a member? <a href="log.php">Sign in</a>
    </td>
  </tr>
  	</p>
    
  </form>
</body>
</html>