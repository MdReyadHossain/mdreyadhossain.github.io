<?php 
    require '../Model/infoDB.php';
    session_start(); 
    if(!isset($_SESSION['user'])) {
        header("Location: ../View/login.php");
    }

    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        delete($id);
        header("location: ../View/dashboard.php");
    }
    else {
        die("Invalid Request");
    }
?>