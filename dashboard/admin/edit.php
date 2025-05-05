<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GymDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Members Page</title>
<link rel="stylesheet" href="../admin/members.css" />
</head>
<body>
    
<!--PAGE HEADER AND NAVIGATION-->

<div class="header">
<a href="home.php">Home</a>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Add Member</button>
<a href="view.php">View Records</a>
<a href="logout.php">Logout</a>
</div>

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$uid=$_REQUEST['uid'];
$uname=$_REQUEST['uname'];
$fname=$_REQUEST['fname'];    
$lname=$_REQUEST['lname'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];    
$zip=$_REQUEST['zip'];    
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."', m_uid='".$uid."',
m_uname='".$uname."', m_fn='".$fname."', m_ln='".$lname."', m_add='".$address."', m_city='".$city."', m_state='".$state."', m_zip='".$zip."', m_email='".$email."', m_phone='".$phone."',
submittedby='".$submittedby."' where id='".$uid."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}

else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="uid" type="hidden" value="<?php echo $row['m_uid'];?>" />
<p><input type="text" name="fname" placeholder="Enter First Name" 
required value="<?php echo $row['m_fname'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>

</body>
</html>