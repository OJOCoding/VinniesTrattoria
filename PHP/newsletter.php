<?php
  require "../DBMS/db.php";
  if(isset($_POST["submit"])){
    $Email = mysqli_real_escape_string($conn,$_POST["Email"]);
    $query = " INSERT INTO `newsletter` ( `Email`) VALUES ( '$Email');";

    header("Location: BLOGPHP/blog_index.php");
    mysqli_query($conn,$query);
  }
?>
