<?php
// Load Composer's autoloader (if using Composer)
require '../vendor/autoload.php';

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(400); 
        exit;
    }

    if(!empty($_POST['hb'])) {
        http_response_code(400); 
        exit;
    }
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $captcha = $_POST['g-recaptcha-response']; // reCAPTCHA token

    // Validate reCAPTCHA v3
    $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"; // Replace with your reCAPTCHA secret key
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secretKey,
        'response' => $captcha
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $responseKeys = json_decode($result, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA validation passed
        // Validate and sanitize input
        $name = htmlspecialchars(strip_tags(trim($name)));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(strip_tags(trim($message)));

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400); 
            exit;
        }

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'sandbox.smtp.mailtrap.io'; // SMTP server (e.g., smtp.gmail.com)
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'e71c4ce96445dc'; // SMTP username
            $mail->Password = '1e20950a5452ba'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
            $mail->Port = 2525; // TCP port to connect to

            // Recipients
            $mail->setFrom('your-email@example.com', 'Your Name'); // Sender
            $mail->addAddress('recipient@example.com', 'Recipient Name'); // Recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = "Email from" . $name . " - " . $email;
            $mail->Body = "
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong></p>
                <p>$message</p>
            ";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message"; // Plain text version

            // Send the email
            $mail->send();
            http_response_code(200); 
            exit;
        } catch (Exception $e) {
            http_response_code(400); 
            exit;
        }
    } else {
        // reCAPTCHA validation failed
        http_response_code(400); 
        exit;
    }
} else {
    // If the form is not submitted, redirect to the form page
    http_response_code(400); 
    exit;
}
?>