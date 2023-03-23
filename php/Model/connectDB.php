<?php
    function connect() {
        // $server = "sql203.ezyro.com";
        // $db_user = "ezyro_32492792";
        // $db_pass = "reyadserver";
        // $dbname = "ezyro_32492792_reyad";
        $server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $dbname = "reyad";
        $reyad = new mysqli($server, $db_user, $db_pass, $dbname);

        if ($reyad->connect_error) {
            die("Data base Connection failed: " . $reyad->connect_error);
        }

        return $reyad;
    }
?>