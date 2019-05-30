<?php
  $db = mysqli_connect('localhost', 'root', '', 'fou');

  if (isset($_POST['recover_pwd'])) {
$email = $_POST['Email'];
$user_check_query = "SELECT * FROM useri WHERE email='$email'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

$usr= $user['username'];
$password=$user['password'];


$subject = 'FOU - Recover password';
$message = '<h1>Hello there, '.$usr.'! </h1><p>This is your password: <h2> '.$password.' </h2></p>';
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: FOU - File Online Uploader <FOUoffice@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($email,$subject,$message,$headers);
header("location:responsereset.html");
  }
    ?>
