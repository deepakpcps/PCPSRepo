<?php

    $empname = $_POST['empname'];
    $empcode = $_POST['empcode'];
    $empaddress = $_POST['empaddress'];
    $empcontact = $_POST['empcontact'];

    echo "<p> Hello $empname, your employee code is $empcode.</p>"."<br/>";
    echo "Address: $empaddress <br/>";
    echo "Contact: $empcontact <br/>";
?>