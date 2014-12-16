<?php
include_once 'src/php/dblogin_root.php';

function execute_query($to_execute, $conn) {
   $query="USE project";

   $result = $conn->query($query);

   if ($result === FALSE)
      die("Error: failed to connect to the database<br>");

   $query="$to_execute";

   echo "Executing query: '$query' <br><br>";

   $result = $conn->query($query);

   if ($result ==- FALSE)
      die("Error executing the sql query");

};
?>
