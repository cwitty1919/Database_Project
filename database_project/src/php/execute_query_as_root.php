<?php
include_once 'src/php/dblogin_root.php';

function execute_query($to_execute, $conn) {
   $query="$to_execute";

   echo "Executing query: '$query' <br><br>";

   $result = $conn->query($query);

   if ($result ==- FALSE)
      die("Error executing the sql query");

};
?>
