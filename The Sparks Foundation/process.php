<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email configuration
$to = 'stonerboy01111@gmail.com';  // Replace with your email address
$subject = 'Contact Form Submission';
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/plain\r\n";

// Compose the email message
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n\n";
$email_message .= "Message:\n$message";

// Send the email
$mail_sent = mail($to, $subject, $email_message, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    // Redirect back to the HTML page with a success message
    // header("Location: index.html?status=success");
    echo("success");
} 
else {
    // Redirect back to the HTML page with an error message
    header("Location: index.html?status=error");
}
exit;
?>