<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<header></header>

<body>
    <?php
        $link = mysqli_connect("localhost", "root", "", "course_db");
        $sql = "SELECT * FROM courseTable";
    ?>
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates">
            <div class="schedule-item schedule-item-selected">January 5,2022</div>
            <div class="schedule-item ">January 6,2022</div>
            <div class="schedule-item">January 7,2022</div>
            <div class="schedule-item">January 8,2022</div>
            <div class="schedule-item">January 9,2022</div>
        </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE OF COURSE </th>
                </tr>
                <?php
                    if($result = mysqli_query($link, $sql)){
                        $num = mysqli_num_rows($result);
                        if(mysqli_num_rows($result) > 0){
                            for ($i = 0; $i < $num; $i++){
                                $row = mysqli_fetch_array($result);
                                echo '<tr class="fade-scroll">
                                        <td>
                                        <h2>'. $row['courseTitle'] .'<h2>';
                                echo '<td>
                                        <div class="hall-type">
                                            <h3>Private Hall</h3>
                                            <div>
                                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                                <div class="schedule-item">09:00 AM</div>
                                                <div class="schedule-item">11:30 AM</div>
                                                <div class="schedule-item">06:00 PM</div>
                                            </div>
                                        </div>
                                        <div class="hall-type">
                                            <h3>VIP Hall</h3>
                                            <div>
                                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                                <div class="schedule-item">09:00 AM</div>
                                                <div class="schedule-item">11:30 AM</div>
                                                <div class="schedule-item">06:00 PM</div>
                                            </div>
                                        </div>
                                        <div class="hall-type">
                                            <h3>Main Hall</h3>
                                            <div>
                                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                                <div class="schedule-item">09:00 AM</div>
                                                <div class="schedule-item">11:30 AM</div>
                                                <div class="schedule-item">06:00 PM</div>
                                            </div>
                                        </div>
                                        </td>
                                        </tr>';
                            }
                        }
                        mysqli_free_result($result);
                    }
                    mysqli_close($link);
                ?>
            </table>
        </div>


    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/header.js "></script>
</body>

</html>