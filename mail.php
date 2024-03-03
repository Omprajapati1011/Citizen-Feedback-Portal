<?php

$to_email = "feneelsolanki67@gmail.com"; $subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script in 2020 from youtube";
$headers = "From: om313989@gmail.com";
if(mail($to_email, $subject, $body, $headers)) {
echo "Email successfully sent to $to_email...";
} else {
echo "Email sending failed...";
}

?>