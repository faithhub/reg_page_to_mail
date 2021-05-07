<?php

$to = "amaongvj@amaofaith.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$subject = "New User Registerred Successfully";
$subject2 = "Copy of your form submission";

$message = "Hi Admin, " . $name . " has registerred on your website successfully, find the registration details below" . "<br><br>"
    . "Full Name: " . $_POST['name'] . "<br><br>" . "Email: " . $_POST['email'] . "<br><br>" . "Password: " . $_POST['password'] . "<br><br>" . "Time Registerred: " . date("Y-m-d h:i:sa");


$message2 = "Here is a copy of your registration details below" . "<br><br>"
    . "Full Name: " . $_POST['name'] . "<br><br>" . "Email: " . $_POST['email'] . "<br><br>" . "Password: " . $_POST['password'] . "<br><br>" . "Time Registerred: " . date("Y-m-d h:i:sa");

$headers .= "Reply-To: The Sender " . $from . "\r\n";
$headers .= "Return-Path: The Sender" . $from . "\r\n";
$headers .= "From: " . $from . "\r\n" .
    $headers .= "Organization: Sender Organization\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
//echo $message;

$mail1 = mail($to, $subject, $message, $headers);
$mail2 = mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
if ($mail1) {
    echo "200";
} else {
    echo "422";
}
