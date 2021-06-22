<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
$email = trim($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$error = '';

if(!$email)
{
$error .= "Please input your email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Please input correct email<br />";
}
if(!$error)


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайта miningsoftware.solutions";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

$message1 ="\n\nИмя: ".$name."\n\nE-mail: " .$email."\n\nTG/Whatsapp: ".$message."\n\n";	


$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка <rigstatus.info@gmail.com>\n\n";	
$mail = mail("rigstatus.info@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>