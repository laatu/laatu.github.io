<?php 
define('DB_HOST', 'mysql6.000webhost.com'); 
define('DB_NAME', 'a8958712_db'); 
define('DB_USER', 'a8958712_us'); 
define('DB_PASSWORD', 'laatujike2'); 
     
$dbc = mysqli_connect('DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME') 
or die('Error connecting to MySQL server.'); 

$query = "SELECT A, B, C FROM abc"; 
$data = mysqli_query($dbc, $query) 
or die ('Error getting data');

?>
