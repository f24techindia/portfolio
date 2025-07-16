<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);
$email = $input['email'] ?? '';

// Basic validation
if (empty($email)) {
    http_response_code(400);
    echo json_encode(['error' => 'Email is required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u925328211_ncb', 'u925328211_ncb', 'Aman123@f24tech24');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insert newsletter subscription
    $stmt = $pdo->prepare("
        INSERT INTO newsletter_subscriptions (email, subscribed_at) 
        VALUES (?, NOW())
        ON DUPLICATE KEY UPDATE 
        status = 'active', 
        subscribed_at = NOW()
    ");
    
    $stmt->execute([$email]);
    
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'Failed to subscribe']);
    exit;
}

// Send welcome email (optional)
$to = $email;
$subject = 'Welcome to F24Tech Newsletter';
$message = "
Thank you for subscribing to our newsletter!

You'll receive the latest tech insights, company updates, and industry news directly in your inbox.

Best regards,
The F24Tech Team
";

$headers = "From: newsletter@f24tech.com\r\n";
$headers .= "Reply-To: sales@f24tech.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Uncomment to send welcome email
// mail($to, $subject, $message, $headers);

echo json_encode(['success' => true, 'message' => 'Successfully subscribed to newsletter!']);
?>