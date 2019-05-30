<?php

    $con=mysqli_connect('localhost','root','','fou');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
