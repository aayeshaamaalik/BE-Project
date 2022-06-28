<?php
    require 'connection.php';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * from users WHERE username = '$username' and password = '" . md5($password) . "'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1){
        $_SESSION['username'] = $username;
        header('Location: GetStarted.php');
    }
    else{
        echo 'Incorrect';
    }
?>