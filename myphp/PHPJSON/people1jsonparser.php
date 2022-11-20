<?php
 
$people_json = file_get_contents('people1.json');
 
$decoded_json = json_decode($people_json, false);
 
echo "Name: ".$decoded_json->name;
// Monty

echo "<br/>"; 

echo "Email: ".$decoded_json->email;
// monty@something.com

echo "<br/>"; 

echo "Contact: ".$decoded_json->phone;
// +1 (212) 555-1234

echo "<br/>"; 

echo "Address: ".$decoded_json->address;
// Monty

echo "<br/>"; 

 
echo "Age: ".$decoded_json->age;
// 77
 
?>