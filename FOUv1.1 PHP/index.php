<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Online Uploader</title>
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="cssfiles/loginStyle.css">
  </head>
  <body class="body">
      <div class="page-wrapper">
        <div class="row">
          <div class="column">
              <div class="header">
            <a href="index.php"><img class="image" src="media/titlu-logo.png"></a>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="column">
          <div class="column1"><h1>Why "File Online Uploader"?</h1>
              <h2>This online file storage is very fast, secured and totally free!</h2>
          </div>
        </div>
          <div class="column">
          <div class="column2">
            <div class="frm">
              <?php
                       if(@$_GET['Empty']==true)
                       {
                   ?>
                       <h5><?php echo $_GET['Empty'] ?></h5>
                   <?php
                       }
                   ?>


                   <?php
                       if(@$_GET['Invalid']==true)
                       {
                   ?>
                   <h3><?php echo $_GET['Invalid'] ?></h3>
               <?php
                   }
               ?>
              <form action="process.php" method="POST">
            Username:
            <input type="text" id="user" name="UName">
            Password:
            <input type="password" id="pass" name="Password">
            <input type="submit" id="btn" name="Login" class="button buttonlogin" value="LOGIN"></button>
          </form>
          <br>
        </div>
            <br>
            <br>
            <a href="resetpassword.html">Ups! I forgot my password.</a>
            <br>
            <p>Don't have an account?<br> <a href="registerPage.php">Register right now!</a>
          </div>
          </div>
        </div>
      </div>
  </body>
</html>
