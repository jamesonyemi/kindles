<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$user_name = array('Claude Nai','James', 'Osborne Sapaty');
$user_email = array('claude@africaloop.com', 'james@africaloop.com','osborne@africaloop.com');
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'developergh21@gmail.com';                 // SMTP username
$mail->Password = 'Developer@123##';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('developergh21@gmail.com', 'Africaloop');
$mail->addAddress($user_email[1], $user_name[1]);     // Add a recipient[]
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@gcbgh.com', 'Movie Ticket');
// $mail->addCC('jamesonyemi@gmail.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = strtoupper('SilverStar Cinema');
$mail->Body    = "\n".$user_name[2]."\n". "has been awarded a <b>free movie ticket</b> on "."\n". gmdate('Y-m-d h:i', strtotime('+1 week')) ;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<div style="color:#3668C3;"><span>Message has been sent</span></div>';
}