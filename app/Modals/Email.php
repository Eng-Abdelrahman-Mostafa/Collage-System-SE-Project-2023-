<?php

require_once base_path('lib/PHPMailer/src/PHPMailer.php');
require_once base_path('lib/PHPMailer/src/SMTP.php');
require_once base_path('lib/PHPMailer/src/Exception.php');

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Set the SMTP settings for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'yourgmailusername@gmail.com';
$mail->Password = 'yourgmailpassword';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set the sender and recipient email addresses
$mail->setFrom('yourgmailusername@gmail.com', 'Your Name');
$mail->addAddress('recipient@example.com', 'Recipient Name');

// Set the subject and body of the email
$mail->Subject = 'Test email from PHPMailer';
$mail->Body = 'Hello, this is a test email sent from PHPMailer!';

// Send the email
if(!$mail->send()) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent!';
}
?>
