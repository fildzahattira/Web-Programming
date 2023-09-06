<?php
if (session_status() != 2) {
  session_start();
}
$conn = new mysqli("localhost","root","","librarydetikcom","3307");

//connection check
if($conn -> connect_errno) {
  echo "Error: " . $conn -> connect_error;
  exit();
}
// echo "connection : success";
// echo "<hr />";
?>