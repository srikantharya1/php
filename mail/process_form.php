<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "srikantharya1@gmail.com";
    $subject = "Form Submission";
    
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Construct HTML message
    $html_message = "<html><body>";
    $html_message .= "<h1>Contact Form Submission</h1>";
    $html_message .= "<p><strong>Name:</strong> $name</p>";
    $html_message .= "<p><strong>Email:</strong> $email</p>";
    $html_message .= "<p><strong>Message:</strong> $message</p>";
    $html_message .= "</body></html>";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $name <$email>\r\n";

    // Sending email
    if (mail($to, $subject, $html_message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
