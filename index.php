<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "", "course_db");
    $username = "";
    $password = "";
    $_SESSION["loggedin"] = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty(trim($_POST["Username"]))){
            $username = trim($_POST["Username"]);
        }else{
            header("Location: index.php");
            exit();
        }
        if(!empty(trim($_POST["Password"]))){
            $password = trim($_POST["Password"]);
        }else{
            header("Location: index.php");
            exit();
        }
        if(empty($username_err) && empty($password_err)){
            $sql = " SELECT * FROM adminTable WHERE adminID ='$username' AND adminPW = '$password'";
            if($result = mysqli_query($link, $sql)){
                $row = mysqli_fetch_array($result);
                if($row['adminID'] == $_POST['Username']  && $row['adminPW'] == $_POST['Password']){
                    echo "Login as admin";
                    header("Location: admin/admin.php ");
                }else{
                    echo "Login as student";
                    header("Location: main.php");
                }
                $_SESSION["loggedin"] = true;

            }
            mysqli_free_result($result);

        }
        mysqli_close($link);
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
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<style>   
    p {
        margin: 20px;
        right: 20px;
        font-size: 25px;
    }
    button {   
        background-color: #4CAF50;   
        width: 5%;    
        padding: 10px;    
        border: none;   
        cursor: pointer;  
        margin: 20px;

    }      
    form { 
        text-align: center;
    }
    input[type=text], input[type=password] {   
        margin: 8px;  
        padding: 5px 20px;   
        border: 2px solid green;   
    }  
    button:hover {   
        opacity: 0.7;   
    }   
    .container {   
        padding: 25px;    
    }   
</style>   
<body>
    <header></header>
    <form method="post">
        <div class="container">
            <p>Login</p>
            <label>Username: </label>
            <input type = "text" name = "Username"></input><br>
            <label>Password: </label>
            <input type = "Password" name = "Password" ></input><br>
            <button type="submit">Login</button>      
        </div>
    </form>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/header.js "></script>
</body>

</html>

