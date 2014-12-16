<?php
include_once 'src/php/dblogin.php';

function execute_query($to_execute, $conn) {
   $query="USE project";

   $result = $conn->query($query);

   if ($result === FALSE)
      die("Error: failed to connect to the database<br>");

   $query="$to_execute";

   echo "Executing query: '$query' <br><br>";

   $result = $conn->query($query);

   if ($result === FALSE)
      die("Error executing the sql query");

}

function print_query($query) {
   while ($row = $query->fetch_assoc()) {
      print_r($row);
      echo "<br>";
   }
}

function execute_and_print_query($to_execute, $conn) {
   $query="USE project";

   $result = $conn->query($query);

   if ($result === FALSE)
      die("Error: failed to connect to the database<br>");

   $query="$to_execute";

   echo "Executing query: '$query' <br><br>";

   $result = $conn->query($query);

   if ($result ==- FALSE)
      die("Error executing the sql query");

   echo "Result: <br><br>";
   print_query($result);
   echo "<br>";
}
?>
