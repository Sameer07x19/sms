<?php
    $server = "localhost";
   
    $user = "root";
    $password = "root";
    $db = "sms";    
    
    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>