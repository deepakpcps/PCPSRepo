<?php

    require "connection_function.php";

    $conn = OpenConnection();
    
    if ($conn)
        echo "Successful connection";
    else
        echo "Failed connection";
    
    CloseConnection($conn)
?>