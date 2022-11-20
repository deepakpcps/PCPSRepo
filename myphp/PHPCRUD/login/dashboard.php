<?php

    // if(isset($_SESSION['username']))
    // {
        session_start();
        echo "Hello, <b>" . $_SESSION['username'] . "</b><br/>";

        echo "Cookie Username: ".$_COOKIE['loginname'] ;
    //}
?>