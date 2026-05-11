<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GymDB";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert admin data into database
$sql = "INSERT INTO admin (admin_uname, admin_fn, admin_ln, admin_pass)
VALUES ('$_POST[username]','$_POST[firstname]','$_POST[lastname]','$_POST[passwd]')";

// Execute query and check if insert was successful
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    // Display database error message
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
