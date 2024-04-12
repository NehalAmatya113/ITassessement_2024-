<?php
$name = $_POST['name'];
$Customer_email=$_POST['email'];
$subject=$POST['subject'];
$message = $_POST['message']

$email_form = 'anehal23@tbc.edu.np';

$email_subject = 'New watch';

$email_body ="Use Name: $name.\n".
              "User Email: $Customer_emkail.\n".
              "User subject: $subject.\n".
              "User message: $message.\n";
$to = 'anehal23@tbc.edu.np';

$headers= "Form: $email_form\r\n";
$headers= "Form: $custmer_form\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>