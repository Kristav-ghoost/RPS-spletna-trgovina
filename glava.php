<?php
ini_set("display_errors", 1);
ini_set("track_errors", 1);
error_reporting(E_ALL);
set_error_handler("var_dump");

$mysqli = new mysqli("localhost","rpsuser","razvojprogramskihsistemov","rpsuser_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>