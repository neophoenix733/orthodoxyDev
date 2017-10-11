<?php
$servername = "45.40.164.82";
$username = "copticorthodoxy";
$password = "Magedass@3";
$dbname = "copticorthodoxy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$author = $_GET['author'];


$sql = "SELECT * FROM Links Where Author = '$author' order by Album";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $new_array[] = $row;
    }
}
$conn->close();

echo json_encode($new_array);
?>