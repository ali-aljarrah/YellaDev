<?php
// Load Composer's autoloader (if using Composer)
require '../vendor/autoload.php';
include '../helper/constant.php';
require "../helper/index.php";

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
    $secretKey = captcha_secretKey;
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

        // Validate name
        if(empty($name)) {
            echo json_encode([
                'error' => true,
                'message' => 'name'
            ]);
            exit;
        }

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode([
                'error' => true,
                'message' => 'email'
            ]);
            exit;
        }

         // Validate message
        if(empty($message)) {
            echo json_encode([
                'error' => true,
                'message' => 'message'
            ]);
            exit;
        }

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'smtp.hostinger.com'; // SMTP server (e.g., smtp.gmail.com)
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'info@yelladev.com'; // SMTP username
            $mail->Password = 'oin+[~C~Z6'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
            $mail->Port = 465; // TCP port to connect to
            
            $mail->SMTPDebug = 2;

            // Recipients
            $mail->setFrom($email, $name); // Sender
            $mail->addAddress('info@yelladev.com', 'YellaDev'); // Recipient

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

            echo json_encode([
                'error' => false,
            ]);
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