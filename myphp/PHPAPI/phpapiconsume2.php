<?php

    $response = file_get_contents("http://localhost:3000/PHPJSON/database_to_json.php");
    $resp = json_decode($response, true);

    /*$employees = array();
    $employees = $resp;

    foreach ($employees as $employee){
        echo "<br/>Employee ID: " . $employee->employee_id . "<br/>Employee Name: " . $employee->employee_name . "<br/>";
    }*/
    echo $response . "<br/>";

?>