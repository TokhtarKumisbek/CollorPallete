<?php
    $hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "registeruser"; 


    $mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);

  
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    
    $mysqli->close();
?>
