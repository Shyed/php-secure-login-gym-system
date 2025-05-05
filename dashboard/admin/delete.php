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

$id =$_GET["id"];
$sql = 'DELETE FROM member WHERE m_uid=".$id."';


if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
//header('location:view.php');

mysqli_close($conn);
?>


