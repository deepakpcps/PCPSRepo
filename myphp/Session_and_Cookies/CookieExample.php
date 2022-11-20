<?php

$name = 'language';
$value = 'english';
$expire = time() + 60*60*24*3; // 3 days from now
$path = '/blog';
$domain = 'www.patancollege.edu.np';
$secure = isset($_SERVER['HTTPS']); // or use true/false
$httponly = true;

setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

setcookie("user_name", "pcps", time()+ 60*60,'/'); // expires after 60 *60 seconds
     echo 'the cookie has been set for 60 seconds';

print_r($_COOKIE);
echo $_COOKIE["name"];


?>