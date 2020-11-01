<?php
$servername = "localhost";
$username = "u";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete the database
$sql = "DROP DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database deleted successfully<br>";
} else {
  echo "Error while deleting database: " . $conn->error . "<br>";
}

$conn->close();
?>