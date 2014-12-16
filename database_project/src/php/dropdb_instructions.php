<?php
include 'src/php/dblogin.php';

$dropdb = "DROP DATABASE IF EXISTS $dbname;";
if ($conn->query($dropdb) !== TRUE) {
    $deathstring = "Error dropping database: $conn->error <br>";
    die($deathstring);
}

echo "Database dropped!";
?>
