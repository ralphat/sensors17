<?php
$servername = "localhost";
$username = "root";
$password = "vishnugt";
$dbname = "sensors17";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM main";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["college"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>