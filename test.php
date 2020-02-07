<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';  //mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '6d89deb2ab6f09';   //username
    $mail->Password = '222b4cab2bffa1';   //password
    $mail->Port = 465;                    //smtp port
 
    $mail->setFrom('noreply@artisansweb.net', 'Artisans Web');
    $mail->addAddress('remynijsten@hotmail.com', 'Remy');
 
    $mail->isHTML(true);
 
    $mail->Subject = 'Mailtrap Email';
    $mail->Body    = 'Hello User, <p>This is a test mail sent through Mailtrap SMTP</p><br>Thanks';
 
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}