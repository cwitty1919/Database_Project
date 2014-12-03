<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$dbname = "";
$dbname = $_POST["dbname"];

// Check if database exists
$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = $dbname";
if ($conn->query($sql)) {
  die("$dbname already exists");
}


// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database $dbname created\n";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
echo "Connection closed";
?>
