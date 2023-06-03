<?php
if(isset($_GET['ID'])) {
    $ID = intval($_GET['ID']);
    if($ID <= 0) {
        die('The ID is invalid!');
    }
    else {
        $dbLink = new mysqli('localhost', 'root', '', 'cs306');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
         $query = "
            SELECT `Name`,`Data`
            FROM `job_app_files`
            WHERE `ID` = {$ID}";
        $result = $dbLink->query($query);
 
        if($result) {
            if($result->num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                header("Content-Disposition: attachment; filename=". $row['Name']);
                   echo $row['Data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>