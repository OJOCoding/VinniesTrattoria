<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs306";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as count FROM menu";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row['count'] > 0) {
    echo "Menu already uploaded to database.";
    exit;
}
   $file = "menu.csv";

   $json = csvToJson($file);

   $sql = "INSERT INTO menu (name, description, price, category) VALUES ";

   foreach ($json as $row) {
       $name = mysqli_real_escape_string($conn, $row['name']);
       $description = mysqli_real_escape_string($conn, $row['description']);
       $price = mysqli_real_escape_string($conn, $row['price']);
       $category = mysqli_real_escape_string($conn, $row['category']);
       $sql .= "('$name', '$description', '$price','$category'),";
   }

   $sql = rtrim($sql, ',');
   $result = $conn->query($sql);

   if ($result === TRUE) {
       echo "Data inserted successfully";
   } else {
       echo "Error: " . $conn->error;
   }

   $conn->close();

   function csvToJson($file) {
       $rows = array();
       $header = NULL;
       $handle = fopen($file, "r");
       if ($handle) {
           while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
               if (!$header) {
                   $header = $row;
               } else {
                   $rows[] = array_combine($header, $row);
               }
           }
           fclose($handle);
       }
       return $rows;
   }
?>