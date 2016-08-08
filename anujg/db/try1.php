<?php 
define('DB_HOST', 'mysql4.000webhost.com'); 
define('DB_NAME', 'a9434067_d'); 
define('DB_USER', 'a9434067_u'); 
define('DB_PASSWORD', 'laatujike1'); 
     
$dbc = mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME') 
or die('Error connecting to MySQL server.'); 

$query = "SELECT * FROM feedabck"; 
$data = mysqli_query($dbc, $query)        
or die ('Error getting data');

?>

