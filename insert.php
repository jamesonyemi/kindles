<?php 
include 'config.php'; 
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
    //check if the required fileds have been filled
if ( empty($_POST['name']) || empty($_POST['email'] || empty($_POST['message']) )) 
 {    
   header("Location:index.php");
 } 

 else
 {

if (isset($_POST["save"])) 
{
    
    $title = $_POST["title"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // $created_at = $_POST["created_at"];

try {
    
    $stmt = $conn->prepare("INSERT INTO contact_us (title,name,email,message) 
    VALUES (:title, :name, :email, :message)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message',  $message);

if (is_bool($stmt->execute()))
 {
        // $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $user_name = $name;
        $user_email = $email;
        $title = $title;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPOptions = array(
           'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
            )
        );
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'developergh21@gmail.com';          // SMTP username
        $mail->Password = 'Developer@123##';                  // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->isHTML(true);                                  // Set email format to HTML

        // $mail->setFrom('Lynz Catering Service');
        $mail->addAddress($user_email, $user_name);     
        $mail->addReplyTo($email);
        $mail->Subject = $title;
        $mail->Body    = $message;
        
   }
   if(!$mail->send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {

       echo '<div style="text-align: center; font-size: 2rem; color:#b30f47; margin-top:20%;"><span><h1>Thanks, we will get back to you</h1></span></div>';
       // header("Location:index.php; Refresh:10");
       header("Refresh: 10; url=index.php");

   }


     } catch (Exception $e) {
     	
     	print_r("Error" . $e->getMessage());
     }
   	
   } 
   else{print_r("Failed Processing Data");}
 
 }
 ?>