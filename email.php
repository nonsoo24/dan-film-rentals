<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'daniel.chukwurah@gmail.com';                 // SMTP username
    $mail->Password = 'AGR1100233';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('daniel.chukwurah@gmail.com', 'Daniel');
    $mail->addAddress('chukwurahdanielnonso@yahoo.com');     // Add a recipient

    $body= '<p><strong>Hello</strong> this is my first message</p>';

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'This is a test email';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}