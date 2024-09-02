<?php
$servername = "localhost";
$username = "root";  // Default username for local server
$password = "";  // Default password for local server
$dbname = "free_fire_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
