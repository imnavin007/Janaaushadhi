<?php

    $name=$_POST['name'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];
    $subject = $_POST['subject'];
    $message=$_POST['message']; 

        $to = "janaaushadhipharmacy@gmail.com";
$subject = "MessageFrom website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Contact =" . $phone. "\r\n Message =" . $message;
$headers = "From: message@janaaushadhi.com.np" . "\r\n" .
"CC: bhattaraijyoti1997@gmail.com";
if($name!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");


?>