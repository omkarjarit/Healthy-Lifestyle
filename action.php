<?php
$ToEmail = 'siddhesh@jaritservices.com'; 
$EmailSubject = 'Helthylifestyle contact form '; 
$mailheader = "From: ".$_POST["jaritservices@gmail.com"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["siddhesh@jaritservices.com"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."";
$MESSAGE_BODY .= " Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= " Comment: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: contact.html#section-contact"); 
?>