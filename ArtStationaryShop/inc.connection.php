<?php
ob_start();
session_start();
include('inc.functions.php');
$servername = "localhost";
$username = "root";
$password = "";
$database = "ArtStationaryShop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "$database Connected successfully";
?>