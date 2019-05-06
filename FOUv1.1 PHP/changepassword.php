<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssFiles/changepasswordStyle.css">
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <title>File Online Uploader</title>
  </head>
  <body>
    <div class="page-wrapper">
        <div class="row">
            <div class="column">
              <div class="header">
                  <a href="homeFOU.html">
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
              <a href="favorites.html">
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
              <a href="recent.html">
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
              <a href="files.html">
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
              <a href="tags.html">
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
              <a href="account.html">
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
                <input type="text" name="searchBar" value="Search your files..">
            </div>
          </div>
        </div>

        <div class="row" align="center">
          <div class="column">
              <div class="main">
                  <div class="column2" align="center">
                    <h1>Change Password</h1>
                    <br>
                    <div class="frm">
                    <form method="post" action="passwordChangeProcess.php">
                    Old password:<br>
                    <input type="password" name="password"><br>
                    New password:<br>
                    <input type="password" name="newpassword"><br>
                    New password confirm:<br>
                    <input type="password" name="renewpassword"><br>
                    <br><br>
                    <button type="submit" class="btn" name="change_pwd">Change Password</button>
                  </form>

                    <br><br><br>
                  </div>
                  </div>
</div></div>
    </div>
  </body>
</html>
