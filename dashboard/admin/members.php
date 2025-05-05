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
    
<div id="id03" class="modal">  
  <form class="modal-content animate" action="../admin/addmember.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span> 
      </div>    
            
 <div class="container">
    <h1>Add New Member</h1>    
    <hr>     
     <label for="muname"><b>Member User Name</b></label>
    <input type="text" placeholder="Enter First Name" name="muname" required>
    <label for="mfname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="mfname" required>
    <label for="mlname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="mlname" required>
    <label for="maddress"><b>Address</b></label>
    <input type="text" placeholder="Enter Street Name and Number" name="maddress" required>
    <label for="mcity"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="mcity" required>
    <label for="mstate"><b>State</b></label>
    <input type="text" placeholder="Enter State" name="mstate" required>
    <label for="mzip"><b>Zip Code</b></label>
    <input type="text" placeholder="Enter Zip Code" name="mzip" required>
    <label for="mphone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="mphone" required>
    <label for="memail"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="memail" required>
    <hr>
    <button type="submit" class="addbtn">Add New Member</button>
  </div>    
</form>    
</div>
    
    
    
    
    
    
</body>
</html>