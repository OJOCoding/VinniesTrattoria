<?php

  include "../../DBMS/db.php";

  $ID = mysqli_real_escape_string($conn,$_GET["ID"]);	
  $Name = mysqli_real_escape_string($conn,$_POST["Name"]);
  $Email = mysqli_real_escape_string($conn,$_POST["Email"]);
  $Review = mysqli_real_escape_string($conn,$_POST["Review"]);
  $Image_URL = mysqli_real_escape_string($conn,$_POST["Image_URL"]);

  $query = "UPDATE reviews SET `Name` = '$Name', `Email` = '$Email', `Review` = '$Review', `Image_URL` = '$Image_URL' WHERE `reviews`.`ID` = $ID";
  if(mysqli_query($conn,$query)){
    header("Location: ".ROOT_URL."PHP/REVIEWPHP/user_panel.php");
  }else{
    echo "ERROR:".mysqli_error($conn);
  }

?>

