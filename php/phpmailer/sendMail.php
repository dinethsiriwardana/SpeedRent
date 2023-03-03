<?php
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
include "../encryption.php";

function sendMail($receiver)
{
    //Include required files
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';



    //host
    $host = "smtp.hostinger.com";
    //mail user name
    $userName = "mail@speedrent.live";
    //mail password
    $password = "3@rn(d=YjxNe";
    //sender's mail
    $sentby = "mail@speedrent.live";
    //mail subject
    $subject = "Test mail using phpmailer";

    //mail body
    $body = "Speed Rent
    Hi,
    
    We have received a request to reset your password for your account on Speed Rent. <br>To continue with the password reset process, <br>we are sending you a one-time password (OTP).

    Please use the following OTP to verify your identity and reset your password,
     --------
    | ". decryption( $_COOKIE['OTP'])." |
     --------
    Regards,
    Speed Rent
 
    ";

    //receiver's mail
    $receiver = "shadow8netsw@gmail.com";
    // $receiver = "hirudilmih@gmail.com";



    //Create instance of phpmailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //Define smtp host
    $mail->Host = $host;
    //Enable smtp authentication
    $mail->SMTPAuth = "true";
    //set typr of encryption
    $mail->SMTPSecure = "tls";
    //set port to connect smtp
    $mail->Port = "587";
    //set gmail username
    $mail->Username = $userName;
    //set gmail password
    $mail->Password = $password;
    //set sender email
    $mail->setFrom($sentby);
    //set email subject
    $mail->Subject = $subject;
    //email body
    $mail->Body = $body;
    // $mail->msgHTML(file_get_contents('otp.php'), __DIR__);


    $email->Header = $headers;
        //add receiver
        $mail->addAddress($receiver);
    //send mail
    if ($mail->Send()) {
        echo "Email Sent..!";
    } else {
        echo "Error" . $mail->ErrorInfo;
    }
    //close smtp connection
    $mail->smtpClose();
}


