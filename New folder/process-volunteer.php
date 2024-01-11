<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $location = $_POST['location'];

    // Compose email message
    $subject = "New Volunteer Submission";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";
    $body .= "Location: $location\n";

    // Replace 'your-email@example.com' with your actual email address
    $to = 'your-email@example.com';

    // Set additional email headers if needed
    $headers = "From: $email\r\n";

    // Send the email
    mail($to, $subject, $body, $headers);

    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank-you.html");
    exit();
}
?>
