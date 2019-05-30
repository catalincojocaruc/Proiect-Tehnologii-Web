<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssFiles/tagsStyle.css">
    <link rel="icon" href="media/favico.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              </div>
            </a>
          </div>
          <div class="column">
              <a href="tags.php">
                <div class="navItemCurrent">
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
              <form action="search.php" method="GET">
                <input type="text" name="searchBar" value="Search your files..">
              </form>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="main">
                  <h1>Those are your tags!</h1>
                  <?php
                  session_start();

                  if(isset($_SESSION['User']))
                  {
                      $usr = $_SESSION['User'];
                      $db = mysqli_connect('localhost', 'root', '', 'fou');
                      $user_check_query = "SELECT tag FROM fisiere WHERE username='$usr'";
                      $result = mysqli_query($db, $user_check_query);
                      $vector=array();
                      foreach ($result as $row) {
                        array_push($vector,$row['tag']);
                                       }
                      $no_dup=array_unique($vector);
                      foreach ($no_dup as &$value) {
                            echo '<a href="tagsearch.php?tag='.$value.'"><button type="button" name="button"><h3>'.$value.'</h3></button></a>';
                        }

                  }
                  else
                  {
                      header("location:index.php");
                  }
                  ?>

                </div>
            </div>
          </div>

    </div>
  </body>
</html>
