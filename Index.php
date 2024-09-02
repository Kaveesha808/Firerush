<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <title>Fire Rush</title>
    <link rel="stylesheet" href="css/pk1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
</head>
<body >
  <div> <header class="fixed-header">
        <div class="logo">
            <a href="index.html">
            <img src="images\mylogo.png" style="width:350px;height:auto;" alt="Fire Rush Logo">
            </a>
            
        </div>
        <nav>
            <ul class="flex-list">
                <div class="zoom-in-element1"><li><a href="#How it works">How it works</a></li></div>
                <div class="zoom-in-element2"><li><a href="#how-to-play">How to play</a></li></div>
                <div class="zoom-in-element3"><li><a href="#open-matches">Now open matches</a></li></div>
                <div class="zoom-in-element4"><li><a href="#winners">Today winners</a></li></div>
                <div class="zoom-in-element5"><li><a href="#contact">Contact us</a></li></div>
            </ul>
        </nav>
        
             <div class="shine-wrapper"><img src="images\firerush login .png" style="width:250px;height:auto;"  class="zoom-log" class="shiny-image">
        <div class="shine"></div>
    </header>
   <main>
    <div class="content">

        <section class="hero">
            <div class="image-contain">
                <img src="images\back.jpg" class="back-image" style="margin-left:-280px; margin-top:-40px; width:1529px;height:760px; ">
                <img src="images\GameRush Arena (2).png" class="over-image" style="margin-left:-20px; margin-top:350px; width:650px;height:auto;" alt="Scroll Animated Image" 
                class="animate__animated" 
                data-aos="zoom-in" 
                data-aos-duration="800" 
                data-aos-delay="200" 
                data-aos-once="true"/>
            </div>
            
            
        </section>
    </div>    
    </main>
    <div class="content2">
        <div class="steps">
            <img src="images\Picture1.png" class="How-it-works" style="margin-left:400px; margin-top:1050px; width:870px;height:auto;" alt="Scroll Animated Image" 
            class="animate__animated" 
            data-aos="fade-right" 
            data-aos-duration="1000" 
            data-aos-delay="300" 
            data-aos-once="true"/>
            <img src="images\Picture2.png" class="moco-image" style="margin-left:-55px; margin-top:750px; width:500px;height:auto;" alt="Scroll Animated Image" 
            class="animate__animated" 
            data-aos="fade-up" 
            data-aos-duration="1000" 
            data-aos-delay="300" 
            data-aos-once="true"/>
            <img src="images\1.png" class="back1 " style="margin-left:-50px; margin-top:741px; width:1550px;height:auto; opacity: 0.1;">
        </div>
        <h1 class="styled-heading1">How it works</h1>
    

        </div>
    </div>

<div class="content3">




    <div class="htp">
        <h1>How to play</h1>
        <p alt="Scroll Animated Image" alt="Scroll Animated Image" 
        class="animate__animated" 
        data-aos="zoom-in" 
        data-aos-duration="1000" 
        data-aos-delay="200" 
        data-aos-once="true">Join the excitement of the match by securing your ticket and reserving your spot! Once the required number of players is reached, the match will kick off within an hour.<br><br>
        You will receive your Custom Room ID and Password through SMS, email, and on your dashboard. Compete BOOYAH and Get amazing prizes for first, second, and third places!<br><br>
        Your prize will be credited to your Fire Rush account within just 5 minutes of winning, and you can withdraw your money anytime, hassle-free! Join and show your talent!</p>
    
        <img src="images\kuku.png" alt="Character" class="kuku" alt="Scroll Animated Image" 
        class="animate__animated" 
        data-aos="fade-up" 
        data-aos-duration="1000" 
        data-aos-delay="300" 
        data-aos-once="true"/>
        <img src="images\2.png" alt="Character" class="back3">
        <a href="www.daraz.lk"><h4 class="more">MORE >></h4></a>
    </div>



</div>


<div class="content4">
<div class="htp">
<h1 class="nom">Now open matches</h1>
<img src="images\puku.png" alt="Character" class="puku" alt="Scroll Animated Image" 
        class="animate__animated" 
        data-aos="fade-up" 
        data-aos-duration="1000" 
        data-aos-delay="300" 
        data-aos-once="true"/>
<img src="images\3.png" alt="Character" class="back52">



<div class="machD">
        <img src="images\arow.png" alt="arrow box" class="arrow">
        <div class="detail">The ticket costs Rs. 100 only. First place wins
Rs. 2000,<br> second place wins Rs. 500, and third
place wins Rs. 200.</div>
    </div>

   <p class="mach_name">BR mach 1</p>




 <!-- PHP Code to Get Current Registrations and Remaining Spots -->
 <?php
    include 'config.php';

    $sql = "SELECT COUNT(*) as total FROM tournament_registration";
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

    <p class="number"><?php echo $total_players; ?> of 40</p>
    
    <!-- Registration Form -->
    <?php if ($remaining_spots > 0): ?>
    <form action="register.php" method="post">
    </form>
    <?php else: ?>
    <p>Registration full. No spots available.</p>
    <?php endif; ?>







</div>


<div class="machD2">
        <img src="images\arow.png" alt="arrow box" class="arrow2">    
    </div>
    





   <div class="machD33">
        <img src="images\arow.png" alt="arrow box" class="arrow3">
    </div>
    



</div>


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
    <div class="progress-container2">
        <div class="progress-bar2" style="width: <?php echo $progress_width; ?>%;"></div>
    </div>

    <p class="number3"><?php echo $total_players; ?> of 40</p>

    <!-- Registration Form -->
    <?php if ($remaining_spots > 0): ?>
    <form action="register2.php" method="post">
        
    </form>
    <?php else: ?>
    <p>Registration full. No spots available.</p>
    <?php endif; ?>








<p class="detail2">The ticket costs Rs. 100 only. First place wins
Rs. 2000,<br> second place wins Rs. 500, and third
place wins Rs. 200.</p>



<p class="detail3">The ticket costs Rs. 100 only. First place wins
Rs. 2000,<br> second place wins Rs. 500, and third
place wins Rs. 200.</p>



<?php
    include 'config3.php';

    $sql = "SELECT COUNT(*) as total FROM tournament_registration3";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $total_players = $row['total'];
    $max_players = 40;
    $remaining_spots = $max_players - $total_players;

    // Progress Bar Width Calculation (without percentage display)
    $progress_width = ($total_players / $max_players) * 100;
    ?>

    <!-- Progress Bar Display -->
    <div class="progress-container3">
        <div class="progress-bar3" style="width: <?php echo $progress_width; ?>%;"></div>
    </div>

    <p class="number4"><?php echo $total_players; ?> of 40</p>

    <!-- Registration Form -->
    <?php if ($remaining_spots > 0): ?>
    <form action="register3.php" method="post">
        
    </form>
    <?php else: ?>
    <p>Registration full. No spots available.</p>
    <?php endif; ?>

    <p class="mach_name2">BR mach 1</p>
    <p class="mach_name3">BR mach 1</p>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="js/script1.js"></script>

</body>
</html>