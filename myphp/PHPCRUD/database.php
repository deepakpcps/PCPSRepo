<?php
$servername='localhost';
$username='deepakkarna';
$password='password';
$dbname = "pcpstest";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>