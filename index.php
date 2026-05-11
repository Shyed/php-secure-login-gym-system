<?php
// Start session to manage user login state
session_start();

//     Check if user session already exists. If logged in, redirect directly to admin dashboard.
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MAC 272 GYM| Login</title>
	<!-- External stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/LogIn.css">
</head>
<body>

<!--PAGE HEADER AND NAVIGATION-->
<div class="header">
	<!-- System title / logo -->
	<a href="/MAC272/html/LogIn.html" class="logo">MAC272 GYM MEMBERSHIP MANAGEMENT SYSTEM</a> 

	<div class="header-right">
		<!-- Opens login modal -->
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
		<!-- Opens registration modal -->
		<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Registration</button>
	</div>	
</div>
    
<!--LOGIN FORM-->
<div id="id01" class="modal">
	<!-- Login form sends data to secure_login.php -->
	<form class="modal-content animate" action="secure_login.php" method="post">
    <div class="imgcontainer">
		<!-- Close modal button -->
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<!-- User avatar image -->
		<img src="./css/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
		<!-- Username field -->
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>

		 <!-- Password field -->
		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<hr>

		<!-- Submit login form -->
		<button type="submit">Login</button>
		<label>
			<!-- Remember login checkbox -->
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
    </div>
		
		<!-- Bottom section of login modal -->
		<div class="container" style="background-color:#f1f1f1">
			<!-- Cancel button -->
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<!-- Forgot password link -->
			<span class="psw">Forgot <a href="forgot_password.php">password?</a></span>
			</div>
		</form>
	</div>  

<!--REGISTRATION FORM-->
<div id="id02" class="modal">
	<!-- Registration form sends data to register.php -->
	<form class="modal-content animate" action="register.php" method="post">
		<div class="imgcontainer">
			<!-- Close modal button -->
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="./css/register.png" alt="Register" class="register">
			</div>    
            
 <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
        
    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" required>
     
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
     
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>

    <label for="passwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" required>

    <hr>
	<!-- Terms and privacy agreement -->
    <p>By creating an account you agree to our <a href="register.php">Terms & Privacy</a>.</p>
    <!-- Submit registration form -->
	 <button type="submit" class="registerbtn">Register</button>
  </div>
   <!-- Sign in section -->
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>       
  </form>
</div>  
</body>
</html>
