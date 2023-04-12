<?php
$servername = "us-cdbr-east-06.cleardb.net";
$username = "b6166dd372f475";
$password = "0ab25600";
$dbname = "heroku_a01a5db88f87f22";
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>