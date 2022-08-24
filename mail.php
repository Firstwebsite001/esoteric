<?php
//get data from form  

$name = $_POST['Fname'];
$name = $_POST['Lname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "novelty022@gmail.com";
$subject = "Mail From clenzo professional enterprise";
$txt ="FName = ". $name . "LName = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@clenzoprofessionalenterprise.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>