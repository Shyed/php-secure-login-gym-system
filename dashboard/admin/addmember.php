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

$sql = "INSERT INTO member (m_uname, m_fn, m_ln, m_add, m_email, m_city, m_state, m_zip, m_phone)
VALUES ('$_POST[muname]', '$_POST[mfname]', '$_POST[mlname]', '$_POST[maddress]', '$_POST[memail]', '$_POST[mcity]', '$_POST[mstate]', '$_POST[mzip]', '$_POST[mphone]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>