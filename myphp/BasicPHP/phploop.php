<?php

/**
 * PHP loop example
 * 
 * */

    // for loop example

    echo "Example of for loop: "."<br/>";
    for ($num = 1; $num <= 10; $num += 1) {
        echo "$num <br/>";
    } 

    // while loop example
    echo "Example of while loop: "."<br/>";
    $num = 1;

    while($num <= 10) {
        echo "$num <br/>";
        $num += 1;
    }


    // foreach loop example
    echo "Example of foreach loop: "."<br/>";

    $arr = array (10, 20, 30, 40, 50, 60);  // array declaration in php
    foreach ($arr as $val) { 
        echo "$val <br/>";
    }
    
    echo "Another Example of foreach loop: "."<br/>";
    
    $arr = array ("Ram", "Laxman", "Sita");
    foreach ($arr as $val) { 
        echo "$val <br/>";
    }
?>