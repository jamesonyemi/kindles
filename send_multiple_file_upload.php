<?php
/**
 * PHPMailer multiple files upload and send example
 */
require 'PHPMailerAutoload.php';
$msg = '';
if (array_key_exists('userfile', $_FILES)) {

    // Create a message
    // This should be somewhere in your include_path
$mail = new PHPMailer;
$msg = '';
$user_name = 'James Yemi';
$user_email = 'jamesonyemi@gmail.com';
$mail->isSMTP();                                     // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                              // Enable SMTP authentication
$mail->Username = 'developergh21@gmail.com';         // SMTP username
$mail->Password = 'Developer@123##';                 // SMTP password
$mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                   // TCP port to connect to

    //Attach multiple files one by one
    for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {

        $mail->setFrom('developergh21@gmail.com', 'Test');
        $mail->addAddress($user_email, $user_name); 
        $mail->Subject = 'Test';
        $mail->Body = 'My message body';
        $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    if (!$mail->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Message sent!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHPMailer Upload</title>
</head>
<body>
<?php if (empty($msg)) { ?>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        Select one or more files:
        <input name="userfile[]" type="file" multiple="multiple">
        <input type="submit" value="Send Files">
    </form>
<?php } else {
    echo $msg;
} ?>
</body>
</html>
