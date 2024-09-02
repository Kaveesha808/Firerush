<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Registration</title>
    <style>
        .progress-container {
            width: 100%;
            background-color: #f3f3f3;
            border-radius: 10px;
            margin: 20px 0;
        }
        .progress-bar {
            height: 30px;
            width: 0%;
            background-color: #4caf50;
            border-radius: 10px;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Free Fire Tournament Registration</h1>
    
    <!-- PHP Code to Get Current Registrations and Remaining Spots -->
    <?php
    include 'config2.php';

    $sql = "SELECT COUNT(*) as total FROM tournament_registration2";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $total_players = $row['total'];
    $max_players = 40;
    $remaining_spots = $max_players - $total_players;

    // Progress Bar Width Calculation (without percentage display)
    $progress_width = ($total_players / $max_players) * 100;
    ?>

    <!-- Progress Bar Display -->
    <div class="progress-container">
        <div class="progress-bar" style="width: <?php echo $progress_width; ?>%;"></div>
    </div>

    <p>Currently registered players: <?php echo $total_players; ?></p>
    <p>Remaining spots: <?php echo $remaining_spots; ?></p>

    <form action="register2.php" method="post">
        <label for="player_id">Player ID:</label>
        <input type="number" name="player_id" id="player_id" required><br><br>
        
        <label for="player_name">Player Name:</label>
        <input type="text" name="player_name" id="player_name" required><br><br>

        <input type="submit" value="Register">
    </form>


</body>
</html>
