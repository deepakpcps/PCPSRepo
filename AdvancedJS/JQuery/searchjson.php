<?php
    //open connection to mysql db
    //$connection = mysqli_connect("localhost","deepakkarna","password","pcpstest") or die("Error " . mysqli_error($connection));

    include("connection_function.php");

    header("Content-Type:application/json");

    $empid = 1;//$_GET['empid'];

    $connection = OpenConnection();
    //fetch table rows from mysql db
    $sql = "select * from tbl_employee";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    http_response_code(200);
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>