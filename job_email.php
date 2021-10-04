<?php
session_start();
require_once('connection.php');

$email=$_REQUEST['email'];
$sname=$_SESSION['sname'];
    include "admin/class.phpmailer.php";
    $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; // or 587

$mail->SMTPSecure = 'ssl'; 
$mail->IsHTML(true);
$mail->Username = "alumnistar2020@gmail.com";
$mail->Password = "20alumnistar20";

$to=$email;
$mail->SetFrom("alumnistar2020@gmail.com");
$mail->Subject = 'inquiry from alumini star';
$mail->Body = $sname.' is intrested for job ...';
$mail->AddAddress($to);
$mail->send();

?>