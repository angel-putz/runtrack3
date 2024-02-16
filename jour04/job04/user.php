<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateurs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  $users = array();
  while($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
  echo json_encode($users);
} else {
  echo json_encode(array());
}
$conn->close();
?>