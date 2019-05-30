<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Online Uploader</title>
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="cssfiles/resetpasswordStyle.css">
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
            <h1>Forgot your password?</h1>
            <p>Don't panic, type your Email and we'll send you an email to recover your password.
            <br><br><br>
            <form method="post" action="passwordRecoverProcess.php">
            Email:<br>
            <input type="text" name="Email"><br>
            <br>
              <button type="submit" class="btn" name="recover_pwd">Recover Password</button>
          </form>
            <br><br><br>
          </div>
        </div>
      </div>
  </body>
</html>
