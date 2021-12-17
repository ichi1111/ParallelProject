<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "course_db");

    $sql = "DELETE FROM bookingCourse WHERE bookingID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>