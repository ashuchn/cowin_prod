<?php 

error_reporting(0);

require 'libraries/PHPMailer/src/Exception.php';
require 'libraries/PHPMailer/src/PHPMailer.php';
require 'libraries/PHPMailer/src/SMTP.php';

$from = "ashutoshchauhan129@gmail.com";
$from_name = "ASHUTOSH CHAUHAN";

 $to = "ashutosh.chauhan@acem.edu.in";
 $to_name = "Ashutosh";

$reply = "ashutoshchauhan129@gmail.com";
$reply_name = "Ashutosh Chauhan";

//$to = $_GET['to'];
//$to = $_GET['to_name'];


// $to_name = 'demo user';
$location = $_GET['location'];
$time = $_GET['time'];
$date = $_GET['date'];
$vaccine = $_GET['vaccine'];


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
$mail->AddAddress($to, $to_name);
$mail->SetFrom($from, $from_name);
$mail->AddReplyTo($reply, $reply_name);
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Cowin Vaccine";
$content = "Hi, <b> $to_name</b><br>
                Your vaccine slot is booked.<br>
                Vaccine: $vaccine<br>
                Location: $location<br>
                Date: $date<br>
                Timings: $time<br>
                Thanks for using Cowin Vaccinator app.Stay Safe"; 
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo '<script language="javascript">';
  echo 'alert("Mail not sent")';
  echo '</script>';

  
  // header('Location: slots_by_pincode.php');

  var_dump($mail);
} else {
  echo '<script language="javascript">';
  echo 'alert("mail successfully sent")';
  echo '</script>';
  echo '<script language="javascript">';
  echo 'window.close();';
  echo '</script>';
  // header('Location: slots_by_pincode.php');

}




?>