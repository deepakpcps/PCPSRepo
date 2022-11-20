<?php

    function OpenConnection(){
        $conn = null;
        
        $sname= "localhost";
        $unmae= "deepakkarna";
        $password = "password";
        $db_name = "pcpstest";
        try{
            $conn = new mysqli($sname, $unmae, $password, $db_name);
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

        return $conn;   
    }

    function CloseConnection($conn)
    {
        $conn->close();
    }

?>