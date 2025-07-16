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

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$company = $_POST['company'] ?? '';
$phone = $_POST['phone'] ?? '';
$service = $_POST['service'] ?? '';
$budget = $_POST['budget'] ?? '';
$message = $_POST['message'] ?? '';

// Basic validation
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['error' => 'Name, email, and message are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Database connection (if you want to store contacts)
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u925328211_ncb', 'u925328211_ncb', 'Aman123@f24tech24');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Insert contact submission
    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions (name, email, company, phone, service_interest, budget_range, message, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
    ");
    
    $stmt->execute([$name, $email, $company, $phone, $service, $budget, $message]);
    
} catch (PDOException $e) {
    // Log error but don't expose to user
    error_log("Database error: " . $e->getMessage());
}

// Send email notification (optional)
$to = 'sales@f24tech.com';
$subject = 'New Contact Form Submission from ' . $name;
$email_body = "
Name: $name
Email: $email
Company: $company
Phone: $phone
Service Interest: $service
Budget Range: $budget

Message:
$message
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Uncomment to send email
// mail($to, $subject, $email_body, $headers);

echo json_encode(['success' => true, 'message' => 'Thank you for your message. We will get back to you soon!']);
?>