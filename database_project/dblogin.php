<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = project;

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Error: Failed to connect to the database <br>");
}


?>
