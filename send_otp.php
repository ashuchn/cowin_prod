<?php 

session_start();

require 'libraries/PHPMailer/src/Exception.php';
require 'libraries/PHPMailer/src/PHPMailer.php';
require 'libraries/PHPMailer/src/SMTP.php';


function send_otp()
{
    
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
    }


    // generating otp
    $random_number = rand(1000,9999);
    // return $random_number;
    // echo $email;
    $_SESSION['otp'] = $random_number;
    $_SESSION['email'] = $email;
    // exit;

    // sending mail
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "ashutoshchauhan129@gmail.com";
    $mail->Password   = "Ashutosh@8468921900";
    
    $mail->IsHTML(true);
    $mail->AddAddress($email);
    // // $mail->SetFrom($from);
    // // $mail->AddReplyTo($reply, $reply_name);
    // // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    $mail->Subject = "OTP";
    $content = "OTP to login is $random_number<br>
    Thanks for using Cowin Vaccinator app.Stay Safe"; 
    $mail->MsgHTML($content); 
    // echo $content;
    if(!$mail->Send())
    {
        echo '<script language="javascript">';
        echo 'alert("Mail not sent")';
        // echo 'window.location = "login.php" ' ;
        echo '</script>';    
        var_dump($mail); //prints the logs
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Mail sent")';
        // echo 'window.location = "verify_otp.php" ' ;
        echo '</script>';  
        header('Location: verify_otp.php');
    }



}


send_otp();




?>