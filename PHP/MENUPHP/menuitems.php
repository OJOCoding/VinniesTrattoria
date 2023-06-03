<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs306";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM menu ORDER BY category";
$result = $conn->query($sql);

$currentCategory = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['category'] != $currentCategory) {
            echo '<h2>' . $row['category'] . '</h2>';
            $currentCategory = $row['category'];
        }
        echo '<div class="menu-item">';
		echo "<h3>" . $row['name'] . " <span>" . $row['price'] . " €</span></h3>";
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No menu items found!</p>';
}

$conn->close();
?>
