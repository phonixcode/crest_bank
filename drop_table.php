<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crest_bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE admin_table";

if ($conn->query($sql) === TRUE) {
  echo "Creating Table... <br />";
} else {
  echo "Error adding admin data: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>