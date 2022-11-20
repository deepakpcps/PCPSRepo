<?php
/**
 * This file shows the conditional expression example with php code
 *
 **/

    $first = 5;

    if ($first == 5) {
        echo "The first number is 5"."<br/>";
    }
    else {
        echo "The first number is not 5"."<br/>";
    }

    // Switch case

    $first = 10;

    switch ($first) {
        case 5:
            echo "The first number is 5"."<br/>";
            break;
        
        default:
            echo "The first number is not 5"."<br/>";
            break;
        }
?>