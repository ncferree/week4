<?php
    $dsn = "mysql:host=localhost; dbname=todolist";
    $username = "root";

    try {
        $db = new PDO($dsn, $username);
        echo "You have connected!";
    }catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
?>