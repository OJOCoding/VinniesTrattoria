<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs306";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $conn->select_db($dbname);
    $sqlFile = "306.sql";
    $sql = file_get_contents($sqlFile);
    if ($conn->multi_query($sql) === TRUE) {
        echo"Success!";
    } else {
        echo "Error importing SQL file: " . $conn->error;
    }
} else {
    echo "Error creating database: " . $conn->error;
}

header("Location: ../index.php");

$conn->close();
?>
