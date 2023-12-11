<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM lunettesf";
$result = $conn->query($sql);

?>