<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject = $_POST['subject']; 
$message= $_POST['message'];
$to = "janaaushadhipharmacy@gmail.com";
$subject = "Message From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Contact =" . $phone. "\r\n Subject =" . $subject."\r\n Message =" . $message;
$headers = "From: message@janaaushadhi.com.np";
if($name!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>