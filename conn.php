<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database="hireme";
    $port="3306";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>