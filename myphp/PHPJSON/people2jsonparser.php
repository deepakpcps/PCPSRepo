<?php
 
$people_json = file_get_contents('people2.json');
 
$decoded_json = json_decode($people_json, true);
 
$name = $decoded_json['name'];
$countries = $decoded_json['countries'];
 
foreach($countries as $country) {
    echo $name.' visited '.$country['name'].' in '.$country['year'].'.<br/>';
}

 
?>