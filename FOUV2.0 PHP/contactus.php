<?php

session_start();

if(isset($_SESSION['User']))
{

}
else
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssFiles/contactusStyle.css">
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <title>File Online Uploader</title>
  </head>
  <body>
    <div class="page-wrapper">
        <div class="row">
            <div class="column">
              <div class="header">
                  <a href="homeFOU.php">
                <img src="media/titlu-logo.png">
                </a>
              </div>
            </div>
        </div>

        <div class="row">
          <div class="column">
            <a href="upload.html">
              <div class="navItem1">
                  <div class="navItemRow">
                  <div class="navItemColumn1">
                  <img src="media/upload-logo.png" width="75" height="75">
                  </div>
                  <div class="navItemColumn2">
                  <h1> Upload </h1>
                  </div>
                  </div>
              </div>
              </a>
          </div>
          <div class="column">
              <a href="favorites.php">
            <div class="navItem2">
              <div class="navItemRow">
              <div class="navItemColumn1">
              <img src="media/favorites-logo.png" width="75" height="75">
              </div>
              <div class="navItemColumn2">
              <h1> Favorites </h1>
              </div>
              </div>
            </div>
            </a>
          </div>
          <div class="column">
              <a href="recent.php">
            <div class="navItem1">
              <div class="navItemRow">
              <div class="navItemColumn1">
              <img src="media/recent-logo.png" width="75" height="75">
              </div>
              <div class="navItemColumn2">
              <h1> Recent </h1>
              </div>
              </div>
            </div>
            </a>
          </div>
          <div class="column">
              <a href="files.php">
            <div class="navItem2">
              <div class="navItemRow">
              <div class="navItemColumn1">
              <img src="media/my-logo.png" width="75" height="75">
              </div>
              <div class="navItemColumn2">
              <h1> Files </h1>
              </div>
              </div>
            </div>
            </a>
          </div>
          <div class="column">
              <a href="tags.php">
            <div class="navItem1">
              <div class="navItemRow">
              <div class="navItemColumn1">
              <img src="media/tags-logo.png" width="75" height="75">
              </div>
              <div class="navItemColumn2">
              <h1> Tags </h1>
              </div>
              </div>
            </div>
            </a>
          </div>
          <div class="column">
              <a href="account.php">
            <div class="navItemCurrent">
              <div class="navItemRow">
              <div class="navItemColumn1">
              <img src="media/avatar.png" width="75" height="75">
              </div>
              <div class="navItemColumn2">
              <h1> Account </h1>
              </div>
              </div>
            </div>
            </a>
          </div>
          <div class="column">
            <div class="navSearchBar">
              <form action="search.php" method="GET">
                <input type="text" name="searchBar" value="Search your files..">
              </form>
            </div>
          </div>
        </div>

        <div class="row" align="center">
          <div class="column">
              <div class="main">
                  <div class="column2" align="center">
                    <h1>Contact</h1>
                    <br>
                    <h2>
                      Leader Project:<br>Cojocaru Cătălin Constantin
                    </h2>
                    Phone:0756899495
                    <br>E-mail:catalincojocaruc@gmail.com
                    <br><br><br>
                    <h2>
                      Project asistant:<br>Pintilie Sabin
                    </h2>
                    Phone:0727052769
                    <br>E-mail:sabinpintilie98@gmail.com
                    <br>
                    <br>
                    <h3>Send us a message!</h3>
                    <form method="post" action="contactUsProcess.php">
                    <textarea rows="4" cols="50" name="text">
                    </textarea>
                    <br>
                    <br>
                      <button type="submit" class="btn" name="send_msg">Send message!</button>
                  </form>
                  </div>
</div></div>
    </div>
  </body>
</html>
