<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "info@rarestonecompass.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
}
?>
