<?php

require "connection.php";

require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["e"])){
    $email = $_POST["e"];

    if(empty($email)){
        echo "Please enter your Email address.";
    } else{
        $adminrs = Database::search("SELECT * FROM `admin` WHERE `email` = '".$email."' ");
        $an = $adminrs->num_rows;

        if($an == 1){

            $code = uniqid();

            Database::iud("UPDATE `admin` SET `verification`='".$code."' WHERE `email`='".$email."' ");

            // email code
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'oracularcreations@gmail.com'; 
            $mail->Password = 'danushanka7890'; 
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('tharusha.danushanka@gmail.com', 'SL-Studio'); 
            $mail->addReplyTo('tharusha.danushanka@gmail.com', 'SL-Studio'); 
            $mail->addAddress($email); 
            $mail->isHTML(true);
            $mail->Subject = 'Sl-Studio Admin verification code'; 
            $bodyContent = '<h1> Your verification code is '. $code . '</h1>'; 
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed.Mailer Error: '.$mail->ErrorInfo; 
            } else {
                echo 'Success';
            }

        }else{
            echo "You are not a valid user";
        }
    }
}


?>