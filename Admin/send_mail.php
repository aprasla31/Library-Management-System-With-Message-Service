<?php
$subject=$_POST['subject'];
$message=$_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require'PHPMailer/src/Exception.php';
require'PHPMailer/src/PHPMailer.php';
require'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);


try {
    //Send using SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ahadprasla704@gmail.com';                     //SMTP username
    $mail->Password   = 'bcoijbfaxcpsxkth';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ahadprasla704@gmail.com');
    $mail->addAddress('ahadprasla34@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body =$_POST['message'];
   

    $mail->send();

    echo 
    "
    <script>
    alert('Mail has been sent');
    document.location.href='mail_index.php';
    </script>
    "
    ;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>