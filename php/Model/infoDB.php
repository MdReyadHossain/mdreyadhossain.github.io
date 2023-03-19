<?php
    require 'connectDB.php';

    function message($name, $email, $message) {
        $reyad = connect();
        $sql = "INSERT INTO Contact (Name, Email, Message) VALUES ('$name', '$email', '$message')";
        
        $reyad->query($sql);
        $reyad->close();
    }
?>