<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['ms'];
$addetails= $_POST['ad'];
$to = "trishashetty01@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Additional Details =" . $addetails;
$headers = "From: noreply@donate-now-app.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>