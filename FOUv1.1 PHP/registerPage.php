<?php include('register.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Online Uploader</title>
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="cssfiles/registerStyle.css">
  </head>
  <body class="body">
      <div class="page-wrapper">
        <div class="row">
          <div class="column">
              <div class="header">
            <a href="login.html"><img class="image" src="media/titlu-logo.png"></a>
          </div>
          </div>
        </div>
        <div class="row" align="center">
          <div class="column2" align="center">
            <br>
            <form method="post" action="registerPage.php">
            Firstname:<br>
            <input type="text" name="firstName"><br>
            Lastname:<br>
            <input type="text" name="lastName"><br>
            Username:<br>
            <input type="text" name="username" value="<?php echo $username; ?>"><br>
            Password:<br>
            <input type="password" name="password"><br>
            Password confirm:<br>
            <input type="password" name="repassword"><br>
            Email:<br>
            <input type="text" name="email" value="<?php echo $email; ?>"><br>
            <br><br>
              <button type="submit" class="btn" name="reg_user">Register</button>
            </form>
            <br><br><br>
          </div>
        </div>
      </div>
  </body>
</html>
