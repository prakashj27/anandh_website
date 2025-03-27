<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone $_POST['phone'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "jayaprakashpkt02@gmail.com";
$subject = "From Website";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = " 
    . $email . "\r\n  Phone = " 
    . $phone . "\r\n  Subject = " 
    . $subject . "\r\n Message =" . $message;

$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:last.html");
?>