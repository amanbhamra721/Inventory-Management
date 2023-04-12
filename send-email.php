<?php
require 'PHPMailer/PHPMailerAutoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'upqqbkn710@outlook.com';                 // SMTP username
$mail->Password = 'irjmP53_kl';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('upqqbkn710@outlook.com', 'Aman');
$mail->addAddress('amanbhamra721@gmail.com', 'Deep');     // Add a recipient
$mail->addAddress('amandeepnull721@gmail.com');               // Name is optional
$mail->addReplyTo('upqqbkn710@outlook.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    // header("Location: contactus.php");
}