<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MAC 272 GYM| Login</title>
	<link rel="stylesheet" type="text/css" href="./css/LogIn.css">
</head>
<body>

<!--PAGE HEADER AND NAVIGATION-->
<div class="header">
  <a href="/MAC272/html/LogIn.html" class="logo">MAC272 GYM MEMBERSHIP MANAGEMENT SYSTEM</a> 
<div class="header-right">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
     <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Registration</button>
</div>
</div>
    
<!--LOGIN FORM-->
<div id="id01" class="modal">  
  <form class="modal-content animate" action="secure_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./css/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <hr>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="forgot_password.php">password?</a></span>
    </div>
  </form>
</div>  

<!--REGISTRATION FORM-->
<div id="id02" class="modal">  
  <form class="modal-content animate" action="register.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="./css/register.png" alt="Register" class="register">
      </div>    
            
 <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="user"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>
     
    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>
     
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
     
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>

    <label for="passwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" required>

    <hr>

    <p>By creating an account you agree to our <a href="register.php">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>       
  </form>
</div>  
</body>
</html>
