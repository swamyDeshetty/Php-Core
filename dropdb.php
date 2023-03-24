<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mylaravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DROP DATABASE mylaravel";

if ($conn->query($sql) === TRUE) {
  echo "DATABASE deleted successfully";
} else {
  echo "Error deleting DB: " . $conn->error;
}

$conn->close();
?>