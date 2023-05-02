<?php 

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader =  "From: ".$fullname."<".$email.">\r\n";

$recipent  = "ejaz8837@gmail.com";

mail($recipent,$subject,$message,$mailheader) or die("Error!");

echo "Message Send";
?>