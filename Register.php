<?php
include 'config.php';

$sql = "SELECT COUNT(*) as total FROM tournament_registration";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row['total'] < 6) {
    $player_name = $_POST['player_name'];
    $sql = "INSERT INTO tournament_registration (player_name) VALUES ('$player_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='index.php'>Go back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Registration full. <a href='index.php'>Go back</a>";
}

$conn->close();
?>
