<?php

    // indexed array

    $students = array("Deepak","Arbind","Siddhartha","Arnika");

    for($i=0;$i<count($students);$i++)
    {
        echo $students[$i]. "<br/>";
    }


    // associative array

    $students = array(
        "hod" => "Deepak",
        "associative" => "Binita",
        "ta" => "Dipanshu"
    );

    foreach($students as $key => $value)
    {
        echo $key. " is ". $value. "<br/>";
        //echo $students=>$key.$students[$key]. "<br/>";
    }
    // Multi-dimensional array