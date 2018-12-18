<?php
 
 
function Connect()
{
 $dbhost = "root";
 $dbpass = "";
 $dbname = "responses";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>