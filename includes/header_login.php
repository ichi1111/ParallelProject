
<?php
session_start();
?>
<div class="navbar-brand">
    <a href="main.php">
        <h1 class="navbar-heading">ICT Reservation</h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
        <?php 
            if($_SESSION['loggedin']==true)
            { 
                echo '<li><a href="main.php">Home</a></li>';
                echo '<li><a href="schedule.php">Schedule</a></li>';
                echo '<li><a href="logout.php">Log out</a></li>';
            }
        ?>
        </ul>
    </nav>
</div>
