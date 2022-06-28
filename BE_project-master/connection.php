<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "be_mini_project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 session_start();
 return $conn;
 
 ?>