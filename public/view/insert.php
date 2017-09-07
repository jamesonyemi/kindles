<?php 
include '../../_config.php'; 
include BASE_URL.'public/config.php'; 
require BASE_URL.'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
    //check if the required fileds have been filled
if (empty($_POST['description']) || empty($_POST['subject']) || empty($_POST['email'] )) {

     print_r("Incomplete Data Entry.....");
     
 } else{

if (isset($_POST["save"])) {
    
    $subject = $_POST["subject"];
    $description = $_POST["description"];
    $email = $_POST["email"];

try {
    
    $stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, email) 
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $subject);
    $stmt->bindParam(':lastname',  $description);
    $stmt->bindParam(':email', $email);
if (is_bool($stmt->execute())) {
    echo "New records created successfully" ."<br />"; 	
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail = new PHPMailer;
        $user_name = $email;
        $user_email = $email;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'developergh21@gmail.com';          // SMTP username
        $mail->Password = 'Developer@123##';                  // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->isHTML(true);                                  // Set email format to HTML
 if (array_key_exists('userfile', $_FILES)) {
    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
   for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {

         $mail->setFrom('developergh21@gmail.com', 'support@gmail.com');
        $mail->addAddress($user_email, $user_name);     
        $mail->addReplyTo('developergh21@gmail.com', 'Developer');
        // $mail->addCC('jamesonyemi@gmail.com');
        // $mail->addBCC('bcc@example.com');
        $mail->Subject = $subject;
        $mail->Body = $description;
        $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
     }
   }
}

     } catch (Exception $e) {
     	
     	print_r("Error" . $e->getMessage());
     }
   	
   } else{print_r("Failed Processing Data");}
 
 }

