<?php
    require '../Model/infoDB.php';

    $name = $email = $message = "";
    $isValid = true;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test($_POST['name']);
        $email = test($_POST['email']);
        $message = test($_POST['message']);

        if(empty($name)) {
            $isValid = false;
        }

        if(empty($email)) {
            $isValid = false;
        }

        if(empty($message)) {
            $isValid = false;
        }

        if($isValid) {
            message($name, $email, $message);
            // header("Location: ../../");
            echo "Message Sent!";
        }
    }
?>