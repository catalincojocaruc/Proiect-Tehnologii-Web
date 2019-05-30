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
                  <h1> There are your files with the tag : <?php $tag=$_GET['tag']; echo $tag;  ?> ! </h1>
                  <br>
                  <br>
                  <table style="width:80%" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr bgcolor="	#006999">
                    <th><h2>File name</h2></th>
                    <th><h2>Size</h2></th>
                    <th><h2>Date</h2></th>
                    <th><h2>Versions</h2></th>
                    <th><h2>Tag</h2></th>
                    <th><h2>Favorites</h2></th>
                    <th><h2>Delete</h2></th>
                    </tr>
<?php
if(isset($_SESSION['User']))
{
    $tag=$_GET['tag'];
    $usr = $_SESSION['User'];
    $db = mysqli_connect('localhost', 'root', '', 'fou');
    $user_check_query = "SELECT * FROM fisiere WHERE username='$usr' and tag='$tag'";
    $result = mysqli_query($db, $user_check_query);
    foreach ($result as $row) {
      $id=$row['id'];
      echo '<tr bgcolor="#002333">';

      echo '<th><a style="color:white;" href="download.php?file='.$row['nume_fisier'].'"><h3>'.$row['nume_fisier'].'</h3></a></th>';
      echo '<th><h3>'.$row['dimensiune'].'</h3></th>';
      echo '<th><h3>'.$row['data'].'</h3></th>';
      echo '<th><h3>'.$row['versiuni'].'</h3></th>';
      echo '<th><h3>'.$row['tag'].'</h3></th>';
      if ($row['favorit']==1)
      echo '<th><h3><a href="addfav.php?id='.$id.'"><img src="media/favorites-logo.png" width="75" height="75"></a></h3></th>';
      else
            echo '<th><h3><a href="addfav.php?id='.$id.'"><img src="media/favorites-logo1.png" width="75" height="75"></a></h3></th>';
      echo '<td><h4><a href="deletefile.php?id='.$id.'"><img src="media/trash.png" width="75" height="75"></a></h4></td>';
      echo '</tr>';                   }
}
else
{
    header("location:index.php");
}
?>


                </table>
                </div>
            </div>
          </div>

    </div>
  </body>
</html>
