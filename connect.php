<?php
if ($_SERVER["REQUEST_METHOD"] =='POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('janaaushadhi.com.np','qtiasaqt_admin','@Imnavin007','qtiasaqt_db') or die("Connection Failed:".mysqli_connect_error());
    if (isset($_POST['name'])&& isset($_POST['service'])&& isset($_POST['medname'])&& isset($_POST['med'])&& isset($_POST['phone'])&& isset($_POST['message']))
    {
    $name=$_POST['name'];
    $service=$_POST['service'];
    $medname=$_POST['medname'];
    $med=$_POST['med'];
    $phone=$_POST['phone'];
    $message=$_POST['message']; 

    $sql = "INSERT INTO `user`(`name`, `service`, `medname`, `med`, `phone`, `message`) VALUES ('$name','$service','$medname','$med','$phone','$message')";
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo 'Entry Succesfull';
    }
    else{
        echo  'Error Occured';
    }
    }
}
//get data from form  
$name=$_POST['name'];
$service=$_POST['service'];
$medname=$_POST['medname'];
$med=$_POST['med'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$to = "np4979@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Service = " . $service . "\r\n Medicine Name =" . $medname. "\r\n Generic Name =" . $med . "\r\n Contact =" . $phone. "\r\n Message =" . $message;
$headers = "From: order@janaaushadhi.com.np" . "\r\n" .
"CC: bhattaraijyoti1997@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>