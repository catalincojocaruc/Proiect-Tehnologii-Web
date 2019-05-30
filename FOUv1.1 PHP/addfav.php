<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cssFiles/filesStyle.css">
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
            <div class="navItemCurrent">
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

<?php

$id=$_GET['id'];
if(isset($_SESSION['User']))
{

    $usr = $_SESSION['User'];
    $db = mysqli_connect('localhost', 'root', '', 'fou');

    $user_check_query = "SELECT * FROM fisiere WHERE id=$id";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user['favorit']==0)
{

    $sql = "UPDATE fisiere SET favorit='1' WHERE id=$id";

if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
        header("location:files.php");
} else
{
    echo "Error deleting record: " . $db->error;
}
}

else {
  $sql = "UPDATE fisiere SET favorit='0' WHERE id=$id";

if ($db->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("location:files.php");
} else
{
  echo "Error deleting record: " . $db->error;
}
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
