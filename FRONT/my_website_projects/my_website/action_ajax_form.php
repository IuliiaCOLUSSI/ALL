// RECEAVING AN EMAIL
<?php

if($_POST)
{

$subject ="New message from creal-web.com";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
/*
$message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n";
*/
$message1 ="\n\nИмя: ".$nom."\n\nТелефон: " .$phone."\n\nE-mail: " .$email."\n\nСообщение: ".$message."\n\n";    
 
 
$header = "Content-Type: text/plain; charset=utf-8\n";
 
$header .= "From: Новая заявка <yuliabelova2307@gmail.com>\n\n";  
$mail = mail("example@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));
 
if($mail)
{
echo 'OK';
}
 
}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}



?>
 