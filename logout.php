<?
session_start(); // Start the current session
session_unset(); // Remove all session variables
session_destroy(); // Destroy the active session completely
ob_start(); // Start output buffering to prevent header errors
header("location:index.php"); // Redirect user back to homepage after logout
ob_end_flush();  // Flush output buffer and send response
include 'index.php';
//include 'home.php';
exit();
?>
