<?php
    require 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username != NULL and $password != NULL)
    {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            echo "<script>alert('Username already in use');
            window.location.href='signup.html';
            </script>";
        }
        else{
            $query = "INSERT into users (username, password) VALUES ('$username', '" . md5($password) . "')";
            $result = mysqli_query($conn, $query);
            if($result){
                echo "<script>alert('Registered Successfully! Please login to proceed');
                window.location.href='login.html'
                </script>";
            }
        }
    }
?>