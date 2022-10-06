<?php
$name = $_POST['#name'];
$phone =$_POST['#phone'];
$email =$_POST['#email'];
$text =$_POST['#text'];

$to = "2001syomaj@gmail.com";
$date = date ("d,m,Y");
$time = date ("h:i");
$from = $email;
$subject = "Заявка с сайта";

$msg="
Имя: $name /n
Телефон: $phone /n
Почта: $email /n
Текст: $text";
mail($to, $subject, $msg, "From: $to ");
?>