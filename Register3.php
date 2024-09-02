<?php
include 'config3.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $player_id = $_POST['player_id'];
    $player_name = $_POST['player_name'];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO tournament_registration3 (player_id, player_name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $player_id, $player_name);

    if ($stmt->execute()) {
        echo "Player registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
