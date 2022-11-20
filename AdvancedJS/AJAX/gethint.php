<?php
    // Array with names  
    $a[] = "Ajay";  
    $a[] = "Bishal";  
    $a[] = "Cinderella";  
    $a[] = "Dipika";  
    $a[] = "Ekta";  
    $a[] = "Funny";  
    $a[] = "Gunda";  
    $a[] = "Hari";  
    $a[] = "Irika";  
    $a[] = "Justin";  
    $a[] = "Kiran";  
    $a[] = "Likhita";  
    $a[] = "Nina";  
    $a[] = "Omnia";  
    $a[] = "Priti";  
    $a[] = "Amira";  
    $a[] = "Raphy";  
    $a[] = "Cipla";  
    $a[] = "Dinesh";  
    $a[] = "Engilina";  
    $a[] = "Emina";  
    $a[] = "Sunaina";  
    $a[] = "Tek";  
    $a[] = "Umesh";  
    $a[] = "Vivek";  
    $a[] = "Limka";  
    $a[] = "Manushi";  
    $a[] = "Neelam";  
    $a[] = "Kritisha";  
    $a[] = "Vinod";  
    
    // fetch q parameter from URL  
    $q = $_REQUEST["q"];  
    
    $hint = "";  
    
    // lookup all hints from array if $q is different from ""  
    if ($q !== "") {  
    $q = strtolower($q);  
    $len=strlen($q);  
    foreach($a as $name) {  
        if (stristr($q, substr($name, 0, $len))) {  
        if ($hint === "") {  
            $hint = $name;  
        } else {  
            $hint .= ", $name";  
        }  
        }  
    }  
    }  
    
    // It results in "no suggestion" if no hint was found or output correct values  
    echo $hint === "" ? "no suggestion" : $hint; 

?>