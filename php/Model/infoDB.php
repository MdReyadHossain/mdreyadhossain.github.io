<?php
    require "connectDB.php";

    function message($name, $email, $message) {
        $reyad = connect();

        $sql = "INSERT INTO Contact (Name, Email, Message) VALUES ('$name', '$email', '$message')";
        $reyad->query($sql);
        
        $reyad->close();
    }

    function delete($id) {
        $reyad = connect();

        $sql = "DELETE FROM Contact WHERE ID=$id";
        $reyad->query($sql);

        $reyad->close();
    }
?>