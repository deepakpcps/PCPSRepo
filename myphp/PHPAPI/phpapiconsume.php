<?php

    $response = file_get_contents("http://ip-api.com/json/");
    $resp = json_decode($response, true);

    print_r($resp);

    echo "<br/>Status: ".$resp['status'];
    echo "<br/>Country: ".$resp['country'];
    // echo $resp->status;
    // echo $resp->country;

    

?>