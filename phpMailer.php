<?php
//backend for sending email
//navbar for all projects
//get the email from user to a local variable
$recptid = $_POST['email'];
//include php mailer files
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//start new mailer
$mail = new PHPMailer();
//set smtp
$mail-> isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "TLS";
//set port to connect
$mail->Port = "587";
$mail->Username = "mr.prateek.bhatt@gmail.com";
//google application password generated by google account
$mail->Password = "utgtarwskauzbvzz";
$mail->Subject = "PHP TASK";
$mail->setFrom("mr.prateek.bhatt@gmail.com");
$mail->Body = "This is a test mail for php mailer task";
$mail->addAddress($recptid);
//send email
if($mail->Send())
{
  include "mailer.php";
  echo "Email sent <br>";
  echo "WANT TO SEND ANOTHER MAIL";
}
else
{
  include "mailer.php";
  echo "<b><br>Error</b>";
}
$mail->smtpClose();
?>