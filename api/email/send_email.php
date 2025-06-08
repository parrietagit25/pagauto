<?php
header("Access-Control-Allow-Origin: https://apppcr.net");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// ✅ Responder a preflight requests sin ejecutar el resto
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

require __DIR__ . '/../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


// Cabecera JSON
header('Content-Type: application/json');

// API Key esperada
$API_KEY = "123456789abcdef";

// Obtener y validar JSON
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['token']) || $data['token'] !== $API_KEY) {
    http_response_code(401);
    echo json_encode(['error' => 'Token inválido']);
    exit;
}

if (empty($data['to']) || empty($data['subject']) || empty($data['body'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Faltan campos obligatorios']);
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com'; // o mailgun
    $mail->SMTPAuth = true;
    $mail->Username = 'notificaciones@grupopcr.com.pa';
    $mail->Password = 'R>xv7A=u[3WnJ{rDg;#S';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('notificaciones@grupopcr.net', 'PCR Notificaciones');
    $mail->addAddress($data['to']);

    if (!empty($data['cc'])) {
        $mail->addCC($data['cc']);
    }

    $mail->Subject = $data['subject'];
    $mail->isHTML(true);
    $mail->Body = $data['body'];

    $mail->send();

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $mail->ErrorInfo]);
}
