<?php

// Transfers the data captured in the form to the variables below
$namesender     = $_POST['name'];
$emailsender    = trim($_POST['email']);
$emailreceiver  = 'example@example.com; // Your email here - must be in your web server
$message        = $_POST['message'];
 
 
/* Message that will be sent to your email */
$messageHTML = '<strong>Contact Form</strong>
<p><b>Name:</b> '.$namesender.'
<p><b>Email:</b> '.$emailsender.'
<p><b>Message:</b> '.$message.'</p>
<hr>';


// Sender must be an email in your domain
// Return-path must be the sender email
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
// $headers .= "From: $emailsender\r\n"; // sender
$headers .= "Return-Path: $emailreceiver \r\n"; // return-path
$send = mail($emailsender, $messageHTML, $headers); 
 
 if($send)
echo "<script>location.href='success.html'</script>"; // Redirect page

?>
