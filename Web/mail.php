<?php
$to = "balapc4@gmail.com";
$subject = "My subject";
$txt = "Hi balu!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$mai = mail($to,$subject,$txt,$headers);
 if($mai){
echo "Test message is sent to $to...<BR/>";
}
else
{
echo "Test message is not sent to $to...<BR/>";
}
?> 