<?php
require 'admin/an_lib/class/classautoload.php';
include 'admin/mailtemplates/generatehtml_segmentbuy.php';
require 'admin/an_lib/mail/PHPMailerAutoload.php';
include 'admin/an_lib/mail/examples/smtp.php'; 

$htmlgenarray = array( 
               'name' => $_POST['name'],
               'Phone No.' => $_POST['mobile'],
               'Email' => $_POST['email'],
               'Message' => $_POST['message']
              
             );
			
			
$message = "First Name: ".$_POST['name']."<br/>Mobile: ".$_POST['mobile']."<br/>Email: ".$_POST['email']."<br/>Message: ".$_POST['message'];

$mail = new PHPMailer;
$mail->setFrom('noreply@canamsurvey.com', 'Canamsurvey');
$mail->addAddress("henry@campaignstars.com", "Henry");
$mail->addReplyTo("henry@campaignstars.com", "Reply");
$mail->isHTML(true);

$mail->Subject = "Job Application";
$mail->Body = "$message";
//$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Thank you! The Information has been sent successfully";
}

// $htmlgenarray = array( 
//               'name' => $_POST['fname'],
//               'Last name' => $_POST['lname'],
//               'Apply For' => $_POST['role'],
//               'Linkedin Profile' => $_POST['linkedin'],
//               'email' => $_POST['email']
              
//             );
			
			
// $message = "First Name: ".$_POST['fname']."<br/>Last Name: ".$_POST['lname']."<br/>Email: ".$_POST['email']."<br/>Linkedin Profile: ".$_POST['linkedin']."<br/>Apply For: ".$_POST['role'];


// //$to = "henry@campaignstars.com,talent@campaignstars.com,kate@campaignstars.com,anuj@campaignstars.com";
// $to = "anuj@campaignstars.com";
// $subject = "Job Application";
// $txt = "Hello world!";
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
// $headers.= "X-Priority: 2\nX-MSmail-Priority: high". "\r\n";
// $headers .= "From: henry@campaignstars.com" . "\r\n" ;

// mail($to,$subject,$message,$headers);
  
// echo "Thank you! The Information has been sent successfully";
//print_r($_POST);
?>