<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? trim($_POST['phone']) : 'Not Provided';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Disable verbose debug output for production JSON responses
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'monish.vadlamudi@ikonostechnologies.com'; // SMTP username
        $mail->Password = 'nnmt usfw qfrj smia'; // SMTP App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $mail->setFrom('monish.vadlamudi@ikonostechnologies.com', 'Ikonos Contact Form');
        $mail->addReplyTo($email, $name); // So replying in Gmail replies directly to the client
        $mail->addAddress('info@ikonostechnologies.com', 'Ikonos Technologies');
        $mail->addAddress('monish.vadlamudi@ikonostechnologies.com', 'Monish Vadlamudi');

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Project Inquiry from $name";

        $emailBody = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; padding: 20px; border: 1px solid #e0e0e0; border-radius: 10px; background-color: #ffffff;'>
            <h2 style='color: #8b5cf6; margin-top: 0;'>New Contact Inquiry — Ikonos Technologies</h2>
            <hr style='border: none; border-top: 1px solid #eee; margin: 15px 0;'>
            <p style='font-size: 14px; color: #333;'><strong>Client Name:</strong> " . htmlspecialchars($name) . "</p>
            <p style='font-size: 14px; color: #333;'><strong>Email Address:</strong> <a href='mailto:" . htmlspecialchars($email) . "' style='color: #06b6d4;'>" . htmlspecialchars($email) . "</a></p>
            <p style='font-size: 14px; color: #333;'><strong>Phone Number:</strong> " . htmlspecialchars($phone) . "</p>
            <p style='font-size: 14px; color: #333; margin-bottom: 5px;'><strong>Project Details / Message:</strong></p>
            <blockquote style='background: #f8fafc; border-left: 4px solid #8b5cf6; margin: 10px 0; padding: 15px; font-size: 14px; color: #475569; border-radius: 4px;'>" . nl2br(htmlspecialchars($message)) . "</blockquote>
            <hr style='border: none; border-top: 1px solid #eee; margin: 20px 0 10px 0;'>
            <p style='font-size: 12px; color: #94a3b8; text-align: center;'>This email was sent automatically from the Ikonos Technologies contact form.</p>
        </div>";

        $mail->Body = $emailBody;

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Message Sent Successfully']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>