<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the email details
    $to = "youremail@example.com"; // Replace with your email address
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $fullMessage = "You have received a new message from your contact form.\n\n" .
                   "Name: $name\n" .
                   "Email: $email\n" .
                   "Subject: $subject\n" .
                   "Message:\n$message";

    // Try to send the email
    if (mail("youremail@example.com", "Test Subject", "Test Message", "From: test@example.com")) {
        echo "Mail Sent Successfully!";
    } else {
        echo "Mail Sending Failed.";
    }
    
}
?>
