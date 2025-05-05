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

$sql = "INSERT INTO admin (admin_uname, admin_fn, admin_ln, admin_pass)
VALUES ('$_POST[username]','$_POST[firstname]','$_POST[lastname]','$_POST[passwd]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>