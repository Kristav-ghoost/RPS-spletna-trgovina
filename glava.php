<?php
session_start();
ini_set("display_errors", 1);
ini_set("track_errors", 1);
error_reporting(E_ALL);
//set_error_handler("var_dump");

$conn = new mysqli("localhost","rpsuser","razvojprogramskihsistemov","rpsuser_db");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>