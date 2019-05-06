<?php
$username = $POST['username'];
$password = $POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = my_real_escape_string($username);
$password = my_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("fou");

$result = musql_query("select * from useri where username = '$username'
and password = '$password'")

$row = mysql_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password)
  {
    echo "Login succes! Welcome ", $row['username'];
  }
  else {
    echo "Failed up login";
  }

 ?>
