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
    
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
    <th><strong>Count</strong></th>
    <th><strong>User Id</strong></th>
    <th><strong>Password</strong></th>
    <th><strong>First Name</strong></th>
    <th><strong>Last Name</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>City</strong></th>
    <th><strong>State</strong></th>
    <th><strong>Zip Code</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Phone Number</strong></th>
    <th><strong>Edit</strong></th>
    <th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
    <?php
    $count=1;
    $sel_query="Select * from member ";    
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["m_uid"]; ?></td>
<td align="center"><?php echo $row["m_uname"]; ?></td>
<td align="center"><?php echo $row["m_fn"]; ?></td>
<td align="center"><?php echo $row["m_ln"]; ?></td>
<td align="center"><?php echo $row["m_add"]; ?></td>
<td align="center"><?php echo $row["m_city"]; ?></td>
<td align="center"><?php echo $row["m_state"]; ?></td>
<td align="center"><?php echo $row["m_zip"]; ?></td>
<td align="center"><?php echo $row["m_email"]; ?></td>
<td align="center"><?php echo $row["m_phone"]; ?></td>
<td align="center">
<a href="../admin/edit.php?id=<?php echo $row["m_uid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="../admin/delete.php?id=<?php echo $row["m_uid"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } 
?>
</tbody>
</table>

    
</body>
</html>
