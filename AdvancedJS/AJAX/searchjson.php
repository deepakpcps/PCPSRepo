<?php
    //open connection to mysql db
    //$connection = mysqli_connect("localhost","deepakkarna","password","pcpstest") or die("Error " . mysqli_error($connection));

    include("../connection_function.php");

    //header("Content-Type:application/json");

    $empid = $_GET['empid'];

    $connection = OpenConnection();
    //fetch table rows from mysql db
    $sql = "select * from tbl_employee where employee_id=$empid";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        //$emparray[] = $row;
        echo "Hello <b>".$row["employee_name"]."!!!</b><br />";
        echo "Your designation is <b>:".$row["designation"]."</b></br>";
        echo "You were hired on <b>".$row["hired_date"]."</b></br>";
        echo "Your salary is <b>:".$row["salary"]."</b></br>";
    }
    //http_response_code(200);
    //echo json_encode($emparray);
    

    //close the db connection
    mysqli_close($connection);
?>