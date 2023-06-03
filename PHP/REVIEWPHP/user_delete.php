
<?php
    $id = $_GET['id'];
    $table = $_GET['table'];
    include('../../DBMS/db.php');
 	  mysqli_query($conn, "DELETE FROM `$table` WHERE ID='$id'");
    header('location: user_panel.php');
?>
