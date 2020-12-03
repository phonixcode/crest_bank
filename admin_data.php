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
$sql = "INSERT INTO admin_table(first_name, last_name, email, pass)
VALUES ('Oluyinka', 'Abubakar', 'admin@gmail.com', '12345')";

if ($conn->query($sql) === TRUE) {
  echo "Admin data added successfully";
} else {
  echo "Error adding admin data: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>