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
                    <h1>Account Details</h1>
                    <?php
                        session_start();

                        if(isset($_SESSION['User']))
                        {
                            $usr = $_SESSION['User'];
                            $db = mysqli_connect('localhost', 'root', '', 'fou');
                            $user_check_query = "SELECT * FROM useri WHERE username='$usr'";
                            $result = mysqli_query($db, $user_check_query);
                            $user = mysqli_fetch_assoc($result);
                            echo 'First Name:<h2>'.$user['nume'].'</h2>';
                            echo 'Last Name:<h2>'.$user['prenume'].'</h2>';
                            echo 'Username:<h2>'.$user['username'].'</h2>';
                            echo 'E-mail:<h2>'.$user['email'].'</h2>';
                        }
                        else
                        {
                            header("location:index.php");
                        }

                    ?>
                  </div>
</div></div>
    </div>
  </body>
</html>
