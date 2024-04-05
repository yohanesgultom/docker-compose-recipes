<?php
$servername = $_ENV["MYSQL_HOST"];
$username = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>