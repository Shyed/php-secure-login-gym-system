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
<html lang="en">
<head> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MAC 272 Gym Membership Application </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Home.css">
</head>
<body>

<!--PAGE HEADER AND NAVIGATION-->
<div class="header">
  <a href="../admin/home.php" class="logo">MAC272 GYM MEMBERSHIP MANAGEMENT SYSTEM</a> 
<div class="header-right">
    <a href="../admin/home.php">Home</a>   
    <a href="../admin/members.php">Members </a> 
    <button onclick="parent.location='logout.php'" style="width: auto">Log Out</button>   
</div>
</div>

    


</body>
</html>