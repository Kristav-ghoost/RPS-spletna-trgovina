<?php
session_start();
ini_set("display_errors", 1);
ini_set("track_errors", 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost","rpsuser","razvojprogramskihsistemov","rpsuser_db");
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

//seja veljavna 30 minut
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (30*60))) {
    session_unset(); 
    session_destroy();
    header('location: login.php');
    die();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>