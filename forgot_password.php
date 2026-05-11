<?php
// Start session to access logged-in user data
session_start();

// Temporary session value for testing. Normally userId would already exist after login.
$_SESSION["userId"] = "9";

// Create database connection
$conn = mysqli_connect("localhost", "root", "", "GymDB") or die("Connection Error: " . mysqli_error($conn));

// Check if form was submitted. count($_POST) > 0 means the form contains submitted data.
if (count($_POST) > 0) {
	// Retrieve current logged-in user information
    $result = mysqli_query($conn, "SELECT *from admin WHERE admin_uname='" . $_SESSION["username"] . "'");
    // Fetch database result as an array
	$row = mysqli_fetch_array($result);

	// Compare entered current password with the password stored in database	
    if ($_POST["currentPassword"] == $row["password"]) {
		// Update password in database
        mysqli_query($conn, "UPDATE users set admin_pass='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
        // Success message
		$message = "Password Changed";
    } else
		// Error message if current password is incorrect
        $message = "Current Password is not correct";
}
?>

<html>
<head>
	<title>MAC 272 GYM| Change Password</title>
	<!-- External stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<!-- Password change form -->
	<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
		<div style="width:500px;">
			
			<!-- Display success or error message -->
			<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
			
			<!-- Password form table -->
			<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
			
				<!-- Table header -->
				<tr class="tableheader">
					<td colspan="2">Change Password</td>
					</tr>
				
				<!-- Current password field -->
				<tr>
					<td width="40%"><label>Current Password</label></td>
					<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
					</tr>
				
				<!-- New password field -->
				<tr>
					<td><label>New Password</label></td>
					<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
					</tr>
				
				<!-- Confirm password field -->
				<tr>
				<td><label>Confirm Password</label></td>
				<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
				</tr>
				
				<!-- Submit button -->
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
				</tr>
			
			</table>
			</div>
		</form>
	</body>
</html>

    
