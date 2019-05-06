<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssFiles/homeStyle.css">
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
              <a href="account.php">
            <div class="navItem2">
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

        <div class="row">
            <div class="column">
                <div class="main">
                  <?php
                      session_start();

                      if(isset($_SESSION['User']))
                      {
                          echo '<br><h1> Welcome back, ' . $_SESSION['User'].' !<br/><h1>';
                          //echo '<a href="logout.php?logout">Logout</a>';
                      }
                      else
                      {
                          header("location:index.php");
                      }

                  ?>
                <h1> File Online Uploader! - Your online data saver </h1>
                    <div class="mainRow" align="center">
                        <div class="mainColumn1">
                          <img src="media/fast.png" width="150" height="150">
                          <h1>Fast upload</h1>
                        </div>
                        <div class="mainColumn2">
                          <img src="media/support.png" width="150" height="150">
                          <h1>24H Customer support</h1>
                        </div>
                        <div class="mainColumn1">
                          <img src="media/tags-logo.png" width="150" height="150">
                          <h1>Tag your files</h1>
                        </div>
                      </div>
                      <div class="mainRow" align="center">
                          <div class="mainColumn2">
                            <img src="media/private.png" width="150" height="150">
                            <h1>Privacy of your files</h1>
                          </div>
                          <div class="mainColumn1">
                            <img src="media/free.png" width="150" height="150">
                            <h1>100% Free</h1>
                          </div>
                          <div class="mainColumn2">
                            <img src="media/storage.png" width="150" height="150">
                            <h1>Big storage for your data</h1>
                          </div>
                        </div>
                        <h1>Thank you for choosing FOU!</h1>
                        <h1>CONTACT US</h1
                </div>
            </div>
          </div>

    </div>
  </body>
</html>
