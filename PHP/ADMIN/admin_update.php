<?php
include "../../DBMS/db.php";

  $ID = mysqli_real_escape_string($conn,$_GET["ID"]);	
  $Title = mysqli_real_escape_string($conn,$_POST["Title"]);
  $Author = mysqli_real_escape_string($conn,$_POST["Author"]);
  $Content = mysqli_real_escape_string($conn,$_POST["Content"]);
  $Image_URL = mysqli_real_escape_string($conn,$_POST["Image_URL"]);

  $query = "UPDATE `blog` SET `Title` = '$Title', `Author` = '$Author', `Content` = '$Content', `Image_URL` = '$Image_URL' WHERE `blog`.`ID` = $ID";

  if(mysqli_query($conn,$query)){
    header("Location: admin_panel.php");
  }else{
    echo "ERROR:".mysqli_error($conn);
  }

?>
