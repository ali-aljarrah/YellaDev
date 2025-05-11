<?php
include '../helper/constant.php';
require "../helper/index.php";

// Function to validate domain name
function isValidDomain($domain) {
    // Basic domain validation (more strict than DNS standards)
    return preg_match('/^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,}$/i', $domain);
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(400); 
        exit;
    }

    if(!empty($_POST['hb'])) {
        http_response_code(400); 
        exit;
    }

    $domain = isset($_POST['domain_name']) ? sanitizeInput($_POST['domain_name']) : '';
    $suffix = isset($_POST['suffix']) ? sanitizeInput($_POST['suffix']) : '.com';
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

        // Validate domain name
        if (empty($domain)) {
            echo json_encode([
                'error' => true,
                'message' => 'name'
            ]);
            exit;
        } elseif (!preg_match('/^[a-z0-9-]+$/i', $domain)) {
            echo json_encode([
                'error' => true,
                'message' => 'pattern'
            ]);
            exit;
        } elseif (strlen($domain) > 63) {
            echo json_encode([
                'error' => true,
                'message' => 'length'
            ]);
            exit;
        } elseif (preg_match('/^-|-$/', $domain)) {
            echo json_encode([
                'error' => true,
                'message' => 'symbol'
            ]);
            exit;
        }

        // Validate TLD
        $allowed_tlds = ['.com','.net','.org','.io','.co','.dev'];
        if (!in_array($suffix, $allowed_tlds)) {
            echo json_encode([
                'error' => true,
                'message' => 'tld'
            ]);
            exit;
        }

        // If no errors, check domain
        if (empty($errors)) {
            $full_domain = $domain . $suffix;
            
            // Additional validation of full domain
            if (!isValidDomain($full_domain)) {
                echo json_encode([
                    'error' => true,
                    'message' => 'format'
                ]);
                exit;
            } else {
                // Check DNS (with timeout to prevent hanging)
                $ip = @gethostbyname($full_domain);
                $available = ($ip === $full_domain);

                echo json_encode([
                    'error' => false,
                    'available' => $available
                ]);
                exit;
            }
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