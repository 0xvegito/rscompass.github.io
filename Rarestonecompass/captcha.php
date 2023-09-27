<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $captchaResponse = $_POST["g-recaptcha-response"];

    // Verify the CAPTCHA
    $secretKey = "6Letd1ooAAAAAAKKxKnUpXkSgdkATBghjoZMTDbQ"; // Replace with your Secret Key
    $captchaVerifyUrl = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $secretKey,
        "response" => $captchaResponse
    ];

    $options = [
        "http" => [
            "method" => "POST",
            "header" => "Content-Type: application/x-www-form-urlencoded",
            "content" => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $verify = file_get_contents($captchaVerifyUrl, false, $context);
    $captchaSuccess = json_decode($verify)->success;

    if ($captchaSuccess) {
        // CAPTCHA was successful, proceed with sending email or processing the form
        // Send email code goes here
    } else {
        // CAPTCHA failed, display an error message or take appropriate action
        echo "CAPTCHA verification failed. Please try again.";
    }
}
?>
