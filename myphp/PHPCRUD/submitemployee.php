<?php
    //require "connection_function.php";

    if (isset($_POST['empname']) && isset($_POST['empaddr'])) {
        $empname = $_POST['empname'];
        $empaddr = $_POST['empaddr'];

        echo "EmployeeName:  $empname<br>";
        echo "EmployeeAddress: $empaddr<br>";

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "database_name";
        
        // Create connection
        $conn = new mysqli("localhost",
            "deepakkarna", "password", "pcpstest");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: "
                . $conn->connect_error);
        }

        echo "Connection: " . $conn."<br/>";
    
        $sqlquery = "INSERT INTO employees(empname, empaddress) VALUES('$empname', '$empaddr')";

        if ($conn->query($sql) == TRUE) {
            //echo "record inserted successfully";
            header("Location:viewemployee.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    else {
        header('location: employeehtml.html');
    }

?>