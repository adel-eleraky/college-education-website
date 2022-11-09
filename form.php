<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info@educationwebsite.com";
$email_subject = "New Form Submission";
$email_body = "User Name: $name\n";
$email_body .= "User email: $email\n";
$email_body .= "Subject: $subject\n";
$email_body .= "Message: $message\n";


$to = "example@gmail.com";
$headers = "from: $email_from\n";
$headers .= "reply-to: $email\n";

mail($to , $email_subject , $email_body , $headers);


header("location: contact.html");

?>