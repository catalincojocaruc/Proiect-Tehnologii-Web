<?php

session_start();

if(isset($_SESSION['User']))
{
    $usr = $_SESSION['User'];
}
else
{
    header("location:index.php");
}


if (isset($_POST['send_msg'])) {

  $email = 'zwyret@gmail.com';

  $subject = 'FOU - New message from users';
  $message = '<h1>Hi, you got a message from : '.$usr.'! </h1><h3>'.$_POST['text'].'</h3>';
  $headers =  'MIME-Version: 1.0' . "\r\n";
  $headers .= 'From: FOU - File Online Uploader <FOUoffice@gmail.com>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  mail($email,$subject,$message,$headers);
  header("location:account.php");
}
  ?>
