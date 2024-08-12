<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email configuration
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "Contact Form Submission: " . $subject;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
