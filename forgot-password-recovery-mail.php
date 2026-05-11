<?php

//  Check if PHPMailer class already exists. If not, load required PHPMailer files.
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

// Load mail server configuration settings such as host, username, password, and port.
require_once("mail_configuration.php");

// Create a new PHPMailer object
$mail = new PHPMailer();

// Build password recovery email content. Recovery link includes the member name in URL.
$emailBody = "<div>" . $user["member_name"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["member_name"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["member_name"] . "</a><br><br></p>Regards,<br> Admin.</div>";

/* ---------------- SMTP CONFIGURATION ---------------- */
$mail->IsSMTP(); // Enable SMTP
$mail->SMTPDebug = 0; // Disable debug output
$mail->SMTPAuth = TRUE; // Enable SMTP authentication
$mail->SMTPSecure = "tls"; // Use TLS encryption
$mail->Port     = PORT;   // SMTP server port
$mail->Username = MAIL_USERNAME; // SMTP account username
$mail->Password = MAIL_PASSWORD; // SMTP account password
$mail->Host     = MAIL_HOST; // SMTP host/server
$mail->Mailer   = MAILER; // Mailer type

/* ---------------- EMAIL SETTINGS ---------------- */
$mail->SetFrom(SERDER_EMAIL, SENDER_NAME); // Sender email and sender name
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME); // Reply-to email address
$mail->ReturnPath=SERDER_EMAIL;	 // Return path address
$mail->AddAddress($user["member_email"]); // Recipient email address
$mail->Subject = "Forgot Password Recovery"; // Email subject		 
$mail->MsgHTML($emailBody); // Email body content
$mail->IsHTML(true); // Enable HTML email formatting

/* ---------------- SEND EMAIL ---------------- */
if(!$mail->Send()) {
	// Error message if sending fails
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	// Success message if email is sent
	$success_message = 'Please check your email to reset password!';
}

?>
