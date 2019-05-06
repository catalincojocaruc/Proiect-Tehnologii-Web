<?php
session_start();

if(isset($_SESSION['User']))
{
    $usr = $_SESSION['User'];
    $db = mysqli_connect('localhost', 'root', '', 'fou');
    $user_check_query = "SELECT * FROM useri WHERE username='$usr'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    $oldpass= $user['password'];

    if (isset($_POST['change_pwd'])) {

      $password = $_POST['password'];
      $newpassword = $_POST['newpassword'];
      $renewpassword = $_POST['renewpassword'];


      if (empty($password)) { array_push($errors, "Password is required"); }
      if (empty($newpassword)) { array_push($errors, "Password is required"); }
      if (empty($renewpassword)) { array_push($errors, "Password is required"); }

      if ($newpassword != $renewpassword) {
    	array_push($errors, "The two passwords do not match");
      }
}
  if (($newpassword == $renewpassword) && ($password == $oldpass))
{

    $sql= "UPDATE useri SET password='$newpassword' WHERE username='$usr'";
    if(mysqli_query($db, $sql)){
      echo "Records were updated successfully.";}
      header("location:account.php");
  }
}
else
{
    header("location:index.php");
}
?>
