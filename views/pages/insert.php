<?php 
include '_config.php'; 
include BASE_URL.'config.php'; 
require BASE_URL.'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
    //check if the required fileds have been filled
if (empty($_POST['description']) || empty($_POST['subject']) || empty($_POST['email'] )) {

     print_r("Incomplete Data Entry.....");
     
 } else{

if (isset($_POST["save"])) {
    
    $subject = $_POST["subject"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $description = $_POST["description"];
    $email = $_POST["email"];

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
$mail->setFrom('developergh21@gmail.com', 'support@gmail.com');
$mail->addAddress($user_email, $user_name);     
$mail->addReplyTo('developergh21@gmail.com', 'Developer');
// $mail->addCC('jamesonyemi@gmail.com');
// $mail->addBCC('bcc@example.com');
$mail->Subject = $subject;
$mail->Body = $description;

try {
    
    $stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, subject, description, email) 
    VALUES (:firstname, :lastname, :subject, :description, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname',  $lastname);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':subject',  $subject);
    $stmt->bindParam(':email', $email);
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;  
  }
    elseif(is_bool($stmt->execute())) {
    echo "Data Saved Successfully" ."<br />";
    print_r("Message Delivered Successfully");        
    } 
       else{ 
           print_r("Process Failed...");
        }

        

} catch (Exception $e) {
        
        print_r("Error" . $e->getMessage());
     }
   }
    
 }