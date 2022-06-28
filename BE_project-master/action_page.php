<?php
    require('connection.php');

    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES["filepath"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    move_uploaded_file($_FILES["filepath"]["tmp_name"], $target_file);
?>