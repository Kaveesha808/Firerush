<?php
// Database connection parameters
$servername = "localhost";  // Usually 'localhost'
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "free_fire_db3";  // Name of the database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
