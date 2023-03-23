<?php 
    session_start();

    $password = "";
    $isValid = true;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $isChecked = true;
        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $password = $_POST["password"];

        if(empty($password)) {
            $isValid = false;
        }

        if($isValid) {
            if($password === "blazerblaze"){
                $_SESSION['user'] = "Reyad";
                header("location: ../View/dashboard.php");
            }
            else {
                setcookie("msg", "<div class='alert'>Wrong Password!</div>", time() + 1, "/");
                header("location: ../View/login.php");
            }
        }

        else {
            setcookie("msg", "<div class='alert'>Input Correct Password!</div>", time() + 1, "/");
            header("location: ../View/login.php");
        }
    }
?>