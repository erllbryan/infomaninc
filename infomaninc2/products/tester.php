<?php
ini_set('display_errors', '1');
require_once ('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();

//From email address and name
$mail->From = "maru.ragpala@gmail.com";
$mail->FromName = "Maru Ragpala";

//To address and name
$mail->addAddress("boeingmagr@gmail.com"); //Recipient name is optional
$mail->AddAddress("sales@infomaninc.com");
//$mail->AddAddress("admin@infomaninc.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
	print_r(error_get_last());
} 
else 
{
    echo "Message has been sent successfully";
}
?>