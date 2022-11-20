<?php

    $sname= "localhost";

    $unmae= "deepakkarna";

    $password = "password";

    $db_name = "pcpstest";

    $conn = new mysqli($sname, $unmae, $password, $db_name);

    echo "Welcome to the connection pool.<br>";

    if (!$conn) {

        echo "Connection failed!";

    }
    else {
            echo "Connection established";
    }
?>