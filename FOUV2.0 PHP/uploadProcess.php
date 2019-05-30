<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'fou');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(isset($_POST["submit"])) {
  $usr=$_SESSION['User'];
  $user_check_query = "SELECT * FROM fisiere WHERE username='$usr'";
  $result = mysqli_query($db, $user_check_query);
  $rows=$result->num_rows;
  $id = mysqli_real_escape_string($db, $rows+1);
  $username = mysqli_real_escape_string($db, $_SESSION['User']);
  $nume_fisier = mysqli_real_escape_string($db, $_FILES["fileToUpload"]["name"]);
  $descriere = mysqli_real_escape_string($db, $_POST['fileDescription']);
  $dimensiune = mysqli_real_escape_string($db, filesize($_FILES["fileToUpload"]["tmp_name"]));
  $data = mysqli_real_escape_string($db, date("Y/m/d"));
  $versiuni = mysqli_real_escape_string($db, 1);
  $tag = mysqli_real_escape_string($db, $_POST['fileTag']);
  $favorit = mysqli_real_escape_string($db, 0);
  $parent = mysqli_real_escape_string($db,$nume_fisier);


if (file_exists($target_file)) {
  $user_check_query = "SELECT * FROM fisiere WHERE username='$usr' and parent_file='$nume_fisier'";
  $result = mysqli_query($db, $user_check_query);
  $file = mysqli_fetch_assoc($result);
  $versiuni = mysqli_real_escape_string($db, $file['versiuni']+1);
  $vers=$file['versiuni']+1;

  $query = "UPDATE fisiere SET versiuni=$vers WHERE username='$usr' and parent_file='$nume_fisier'";
  mysqli_query($db, $query);

    $name = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME);
$extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
$nume_fisier = $name . $versiuni . '.' . $extension;

}
    if (  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $nume_fisier))
    {
      $query = "INSERT INTO fisiere (id, username, nume_fisier, descriere, dimensiune, data, versiuni, tag, favorit, parent_file)
            VALUES('$id','$username', '$nume_fisier', '$descriere', '$dimensiune', '$data', '$versiuni', '$tag', '$favorit', '$parent')";
      mysqli_query($db, $query);

        header("location:uploadsucces.html");
    }
     else
     {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>
