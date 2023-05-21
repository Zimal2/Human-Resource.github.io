<?php

$con = new mysqli('localhost','root','','food-website');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>